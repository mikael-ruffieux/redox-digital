<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;

class PublicPagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function home() {
        // taking the 3 last active projects
        $projects = Project::where('archived', 0)->orderBy('date')->take(3);

        return view("public.home", compact('projects'));
    }
    
    public function services($type) {
        if($type == "creation-de-contenus-digitaux") {
            $parent = Service::find(2);
            $other = Service::find(1);

        } elseif($type == "web-digital") {
            $parent = Service::find(1);
            $other = Service::find(2);
        } else {
            return redirect()->back();
        }
        
        $services = $parent->children;
      
        return view("public.services", compact('parent', 'services', 'other'));
    }

    public function portfolio() {
        $projects = Project::where('archived', 0)->orderBy('date')->get();

        return view("public.portfolio.portfolio", compact('projects'));
    }

    public function portfolio_project($id) {
        $project = Project::findOrFail($id);
        $project_type = $project->projectable_type;

        dd($project_type, $project);
    }
}
