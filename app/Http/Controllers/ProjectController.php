<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;

use App\Models\Client;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('date', 'desc')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::orderBy('name', 'asc')->get();
        $categories = Service::all();

        return view('admin.projects.create', compact('clients', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(null !== $request->file('images'));


        // Common part
        $newProject = [
            "title" => $request->title,
            "client_id" => $request->client_id,
            "archived" => $request->archived != "0",
            "custom_summary" => $request->custom_summary,
            "external_url" => $request->external_url,
            "date" => $request->date,

            "context_title" => $request->context_title,
            "context_desc" => $request->context_desc,

            "video_source" => $request->video_source,
            "video_url" => $request->video_url,

            "design_desc" => $request->design_desc,

            "solution_title" => $request->solution_title,
            "solution_desc" => $request->solution_desc,
        ];

        // Saving the new project
        $project = Project::create($newProject);

        // Big images
        $statement = DB::table('images')->where('id', \DB::raw("(select max(`id`) from images)"))->get();
        $nextId = $statement[0]->id+1;

        if(null !== $request->file('images')) {
            foreach ($request->file('images') as $image) {
                $name = "$nextId.".$image->getClientOriginalExtension();
                $destinationPath = public_path('storage/projects/'.$project->id);
                $image->move($destinationPath, $name);
    
                // Saving object
                Image::create([
                    'project_id' => $project->id,
                    'type' => 'image',
                    'url' => "storage/projects/".$project->id."/" . $name,
                ]);
                $nextId ++;
            }
        }

        // Gallery
        if(null !== $request->file('gallery')) {
            $statement = DB::table('images')->where('id', \DB::raw("(select max(`id`) from images)"))->get();
            $nextId = $statement[0]->id+1;
    
            foreach ($request->file('gallery') as $image) {
                $name = "$nextId.".$image->getClientOriginalExtension();
                $destinationPath = public_path('storage/projects/gallery/'.$project->id);
                $image->move($destinationPath, $name);
    
                // Saving object
                Image::create([
                    'project_id' => $project->id,
                    'type' => 'gallery',
                    'url' => "storage/projects/gallery/".$project->id."/" . $name,
                ]);
                $nextId ++;
            }
        }

        // Saving categories
        foreach ($request->categories as $category_id) {
            $project->services()->save(Service::findOrFail($category_id));
        }

        return redirect(route('projects.index'))->with('alert', "Le projet a été enregistré avec succès.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $images = $project->images->where('type', 'image');
        $gallery = $project->images->where('type', 'gallery');
        $categories = Service::all();
        return view('admin.projects.show', compact('project', 'categories', 'images', 'gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $clients = Client::all();
        $categories = Service::all();
        $images = $project->images->where('type', 'image');
        $gallery = $project->images->where('type', 'gallery');
        return view('admin.projects.edit', compact('project', 'clients', 'categories', 'images', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        
        // Common part
        $updatedProject = [
            "title" => $request->title,
            "client_id" => $request->client_id,
            "archived" => $request->archived != "0",
            "custom_summary" => $request->custom_summary,
            "external_url" => $request->external_url,
            "date" => $request->date,

            "context_title" => $request->context_title,
            "context_desc" => $request->context_desc,

            "video_source" => $request->video_source,
            "video_url" => $request->video_url,

            "design_desc" => $request->design_desc,

            "solution_title" => $request->solution_title,
            "solution_desc" => $request->solution_desc,
        ];

        // Updating categories
        $newCats = $request->categories;
        $oldCats = $project->services;
        $services = Service::all();

        if(empty($newCats)) {
            $project->services()->detach();
        } else {
            // Checking in the new cat the one to add to the project;
            foreach ($services as $cat) {
                if(in_array($cat->id, $newCats) && empty($oldCats->find($cat->id))) {
                    $project->services()->attach(Service::findOrFail($cat->id));
                }
            }

            // Checking in the old cats the one to remove from the project;
            foreach ($oldCats as $oldCat) {
                if(!in_array($oldCat->id, $newCats)) {
                    $project->services()->detach($oldCat->id);
                }
            }
        }

        // Updating the new project, and the child
        //dd($request->all(), $updatedProject, $updatedChild);

        $project->update($updatedProject);

        return redirect(route('projects.index'))->with('alert', "Le projet a été enregistré avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        // Suppression de tous les fichiers d'images
        foreach ($project->images() as $image) {
            $image_path = public_path($image->url);
            // Checking if file exists (for the "files" generated through the Seeders)
            if(file_exists($image_path)) {
                unlink($image_path);
            }
        }

        $project->images()->delete();

        $project->services()->detach();

        $project->delete();

        return redirect(route('projects.index'))->with('alert', "Le projet a été supprimé avec succès.");
    }
}