<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;

class PublicPagesController extends Controller
{
    /*
    public function __construct(){
        $this->middleware('auth');
    }
    */

    public function home() {
        // taking the 3 last active projects
        $projects = Project::where('archived', 0)->orderBy('date', 'desc')->take(3)->get();
        $tags = Service::where('isChild', 1)->get();

        return view("public.home", compact('projects', 'tags'));
    }

    public function about() {
        $clients = Client::all();
        return view('public.about', compact('clients'));
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
        $projects = Project::where('archived', 0)->orderBy('date', 'desc')->get();
        $services = Service::where('isChild', 1)->get();

        return view("public.portfolio.portfolio", compact('projects', 'services'));
    }

    /**
     * Display 1 project.
     */
    public function portfolio_project($id) {
        $project = Project::findOrFail($id);
        return view('public.portfolio.project', compact('project'));
    }
}
