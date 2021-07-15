<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectMarketing;
use App\Models\ProjectVideo;
use App\Models\ProjectWeb;
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
        $projects = Project::paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $templates = ['web', 'video', 'marketing'];
        $categories = Service::all();

        return view('admin.projects.create', compact('clients', 'templates', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Common part
        $newProject = [
            "title" => $request->title,
            "context" => $request->context,
            "archived" => $request->archived != "0",
            "date" => $request->date,
            "client_id" => $request->client_id,
            "projectable_type" => 'App\Models\Project' . ucfirst($request->project_type),
        ];

        // Type specific part
        switch ($request->project_type) {
            case 'marketing':
                $childId = ProjectMarketing::create([
                    'mark_desc' => $request->mark_desc
                ])->id;
                break;

            case 'video':
                $childId = ProjectVideo::create([
                    'vid_link' => $request->vid_link,
                    'vid_desc' => $request->vid_desc,
                ])->id;
                break;

            case 'web':
                $statement = DB::table('project_webs')->where('id', \DB::raw("(select max(`id`) from project_webs)"))->get();
                $nextId = $statement[0]->id+1;

                // Saving image
                $image = $request->file('site_screenshot');
                $name = "$nextId.".$image->getClientOriginalExtension();
                $destinationPath = public_path('storage/projects/web');
                $image->move($destinationPath, $name);

                // Saving object
                $childId = ProjectWeb::create([
                    'site_screenshot' => 'storage/projects/web/' . $name,
                    'site_url' => $request->site_url,
                    'site_desc' => $request->site_desc,
                ])->id;
                break;
            
            default:
                return redirect()->back()->with('alert', "Impossible d'enregistrer un projet sans sélectionner un type de projet.");
                break;
        }

        // Saving the new project
        $newProject['projectable_id'] = $childId;

        $project = Project::create($newProject);

        // Gallery
        $statement = DB::table('images')->where('id', \DB::raw("(select max(`id`) from images)"))->get();
        $nextId = $statement[0]->id+1;

        foreach ($request->file('images') as $image) {
            $name = "$nextId.".$image->getClientOriginalExtension();
            $destinationPath = public_path('storage/projects/'.$project->id);
            $image->move($destinationPath, $name);

            // Saving object
            Image::create([
                'project_id' => $project->id,
                'url' => "storage/projects/".$project->id."/" . $name,
            ]);
            $nextId ++;
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
        $categories = Service::all();
        return view('admin.projects.show', compact('project', 'categories'));
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
        $templates = ['web', 'video', 'marketing'];
        $categories = Service::all();
        return view('admin.projects.edit', compact('project', 'clients', 'templates', 'categories'));
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
            "context" => $request->context,
            "archived" => $request->archived != "0",
            "date" => $request->date,
            "client_id" => $request->client_id,
            "projectable_type" => $project->projectable_type,
            "projectable_id" => $project->projectable_id,
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


        // Type specific part
        switch ($project->projectable_type) {
            case 'App\Models\ProjectMarketing':
                $child = ProjectMarketing::findOrFail($project->projectable_id);
                $updatedChild = [
                    'mark_desc' => $request->mark_desc
                ];
                break;

            case 'App\Models\ProjectVideo':
                $child = ProjectVideo::findOrFail($project->projectable_id);
                $updatedChild = [
                    'vid_link' => $request->vid_link,
                    'vid_desc' => $request->vid_desc,
                ];
                break;

            case 'App\Models\ProjectWeb':
                $child = ProjectWeb::findOrFail($project->projectable_id);

                $updatedChild = [
                    'site_url' => $request->site_url,
                    'site_desc' => $request->site_desc,
                ];

                if ($request->hasFile('site_screenshot')) {

                    // Saving image
                    $image = $request->file('site_screenshot');
                    $name = "$id.".$image->getClientOriginalExtension();
                    $destinationPath = public_path('storage/projects/web/');
                    $image->move($destinationPath, $name);
        
                    $updatedChild["site_screenshot"] = "storage/projects/web/" . $name;
                }
                break;
            
            default:
                return redirect()->back()->with('alert', "Impossible d'enregistrer un projet sans sélectionner un type de projet.");
                break;
        }

        // Updating the new project, and the child
        //dd($request->all(), $updatedProject, $updatedChild);

        $project->update($updatedProject);
        $child->update($updatedChild);

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

        $childProject = $project->projectable;

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
        $childProject->delete();

        return redirect(route('projects.index'))->with('alert', "Le projet a été supprimé avec succès.");
    }
}