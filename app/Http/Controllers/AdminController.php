<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Client;
use App\Models\Service;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home() {
        $projects = Project::orderBy('date', 'DESC')->take(5)->get();

        $nb_projects = Project::count();
        $nb_clients = Client::count();
        $nb_services = Service::count();
        return view('admin.dashboard', compact('projects', 'nb_projects', 'nb_services', 'nb_clients'));
    }
}
