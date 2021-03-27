<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $projects = [
        ['id' => 1, 'name' => 'Projet 1', 'desc' => 'Ceci est la description du projet', 'archived' => false],
        ['id' => 2, 'name' => 'Projet 2', 'desc' => 'Ceci est la description du projet', 'archived' => false],
        ['id' => 3, 'name' => 'Projet 3', 'desc' => 'Ceci est la description du projet', 'archived' => true],
        ['id' => 4, 'name' => 'Projet 4', 'desc' => 'Ceci est la description du projet', 'archived' => true],
    ];

    public function login() {

    }

    public function dashboard() {

        $data = array(
            'isPreview' => true,
            'nbProjects'=> count($this->projects),
            'projects' => $this->projects,
        );

        return view('view_admin_dashboard')->with('data', $data);
    }

    public function displayAllProjects() {
        $data = array(
            'isPreview' => false,
            'nbProjects'=> count($this->projects),
            'projects' => $this->projects,
        );

        return view('view_admin_allProjects')->with('data', $data);
    }

    public function displayNewProject() {

    }

    public function addNewProject() {

    }
}
