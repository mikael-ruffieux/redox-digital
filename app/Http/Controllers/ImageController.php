<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($project_id, $type)
    {
        $project = Project::find($project_id);
        $images = $project->images->where('type', $type);

        return view('admin.projects.gallery.index', compact('project', 'images', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add($project_id, Request $request)
    {
        $project = Project::find($project_id);

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
                'type' => $request->type,
            ]);
            $nextId ++;
        }

        return redirect(route('project.gallery', [$project->id, $request->type]))->with('alert', "Les images ont été ajoutées avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project_id, $image_id, $type)
    {
        $project = Project::find($project_id);
        $image = Image::find($image_id);

        $image_path = public_path($image->url);

        // Checking if file exists (for the "files" generated through the Seeders)
        if(file_exists($image_path)) {
            unlink($image_path);
        }
    
        $project->images()->find($image->id)->delete();
        $image->delete();

        return redirect(route('project.gallery', [$project->id, $type]))->with('alert', "L'image a été supprimée avec succès !");
    }
}
