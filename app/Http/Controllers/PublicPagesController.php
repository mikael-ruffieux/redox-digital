<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;

class PublicPagesController extends Controller
{

    /**
     * Displays the home page, with the 3 last projects.
     * The services are used as filters buttons
     */
    public function home() {
        // taking the 3 last active projects
        $projects = Project::where('archived', 0)->orderBy('date', 'desc')->take(3)->get();
        $tags = Service::where('isChild', 1)->get();

        return view("public.home", compact('projects', 'tags'));
    }

    /**
     * Displays the about page.
     * The clients logos are randomly placed
     */
    public function about() {
        $clients = Client::take(18);
        return view('public.about', compact('clients'));
    }
    
    /**
     * Displays the services pages
     */
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

    /**
     * Displays the portfolio page, with all projects
     * The services are used as filters buttons
     */
    public function portfolio() {
        $projects = Project::where('archived', 0)->orderBy('date', 'desc')->get();
        $services = Service::where('isChild', 1)->get();

        return view("public.portfolio.portfolio", compact('projects', 'services'));
    }

    /**
     * Displays 1 project.
     */
    public function portfolio_project($id) {
        $project = Project::findOrFail($id);
        $images = $project->images->where('type', 'image');
        $gallery = $project->images->where('type', 'gallery');

        $similar_projects = Project::where([
            ['archived', 0],
            ['id', '!=', $project->id]
        ])->orderBy('date', 'desc')->take(3)->get();

        /*
        // Similar projects - pas encore prêt, algo assez complexe
        $all_similar_projects = [];
        foreach ($project->services->all() as $service) {
            $all_similar_projects = array_merge($all_similar_projects, $service->projects->where('id', '!=', $project->id)->all());
        }
        dd($all_similar_projects);
        */
        return view('public.portfolio.project', compact('project', 'images', 'gallery', 'similar_projects'));
    }
}
