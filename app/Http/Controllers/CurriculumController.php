<?php

namespace App\Http\Controllers;

use App\Models\CVExperience;
use App\Models\CVProject;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurriculumController extends Controller
{
    public function cv() {
        $experiences = CVExperience::all();
        $projects = CVProject::orderByDesc('date')->take(5)->get();

        return view('public.curriculum', compact('experiences', 'projects'));
    }

    public function portfolio() {
        $projects = CVProject::orderByDesc('date')->get();

        return view('public.cv_portfolio', compact('projects'));

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = CVProject::orderByDesc('date')->paginate(10);
        return view('admin.cv_projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();

        return view('admin.cv_projects.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Image link
        $statement = DB::table('c_v_projects')->where('id', \DB::raw("(select max(`id`) from c_v_projects)"))->get();
        $nextId = $statement[0]->id+1;

        $image = $request->file('image');
        $name = "$nextId.".$image->getClientOriginalExtension();
        $destinationPath = public_path('storage/cv');
        $image->move($destinationPath, $name);
        
        // Common part
        $newProject = [
            "title" => $request->title,
            "project_url" => $request->project_url,
            "categories" => $request->categories,
            "desc" => $request->desc,
            "image" => 'storage/cv/' . $name,
            "date" => $request->date,
            "client_id" => $request->client_id,
        ];

        $project = CVProject::create($newProject);

        return redirect(route('cv-projects.index'))->with('alert', "Le projet a été enregistré avec succès.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = CVProject::findOrFail($id);
        return view('admin.cv_projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = CVProject::findOrFail($id);
        $clients = Client::all();
        return view('admin.cv_projects.edit', compact('project', 'clients'));
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
        $project = CVProject::findOrFail($id);

        // Common part
        $updatedProject = [
            "title" => $request->title,
            "project_url" => $request->project_url,
            "categories" => $request->categories,
            "desc" => $request->desc,
            "date" => $request->date,
            "client_id" => $request->client_id,
        ];

        if ($request->hasFile('image')) {

            // Saving image
            $image = $request->file('image');
            $name = "$id.".$image->getClientOriginalExtension();
            $destinationPath = public_path('storage/cv/');
            $image->move($destinationPath, $name);

            $updatedProject["image"] = "storage/cv/" . $name;
        }

        $project->update($updatedProject);

        return redirect(route('cv-projects.index'))->with('alert', "Le projet a été enregistré avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = CVProject::findOrFail($id);

        // Suppression de l'images
        $image_path = public_path($project->image);
        // Checking if file exists (for the "files" generated through the Seeders)
        if(file_exists($image_path)) {
            unlink($image_path);
        }

        $project->delete();

        return redirect(route('cv-projects.index'))->with('alert', "Le projet a été supprimé avec succès.");
    }


}
