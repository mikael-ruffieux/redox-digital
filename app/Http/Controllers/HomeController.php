<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    protected $nbProjetsParPage = 5;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects=Project::orderBy('projects.created_at','desc')
        ->paginate($this->nbProjetsParPage);
        $links=$projects->render();
        return view('admin.dashboard', compact('projects','links'));
    }
}
