<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    protected $nbProjectsPerPage = 10;

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $projects=Project::orderBy('projects.created_at','desc')
                ->paginate($this->nbProjectsPerPage);
        $links=$projects->render();
        return view('admin.project.view_projects', compact('projects','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.project.view_create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=array_merge($request->all());
        $project = Project::create($inputs);

        if (isset($inputs['categories'])) {

            foreach ($inputs['categories'] as $category) {
                // trim(...) enlève les espaces superflux en début et en fin de chaîne
                $category = trim($category);
                // Str::slug = string to slug 
                $category_url = Str::slug($category);
                $cat_ref = Category::where('category_url', $category_url)->first();
                if (is_null($cat_ref)) {
                    $cat_ref = new Category([
                        'category' => $category,
                        'category_url' => $category_url
                    ]);
                    $project->categories()->save($cat_ref);
                } else {
                    $project->categories()->attach($cat_ref->id);
                }
            }
        }

        return redirect(route('projects.index'));
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
        $categories = Category::all();
        $selectedCat = Project::findOrFail($id)->categories()->get();
        return view('admin.project.view_show', compact('project', 'categories', 'selectedCat'));
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
        $categories = Category::all();
        $selectedCat = Project::findOrFail($id)->categories()->get();
        return view('admin.project.view_edit', compact('project', 'categories', 'selectedCat'));
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
        $inputs=array_merge($request->all());
        $project = Project::findOrFail($id);

        $project->categories()->detach();


        if (isset($inputs['categories'])) {

            foreach ($inputs['categories'] as $category) {
                // trim(...) enlève les espaces superflux en début et en fin de chaîne
                $category = trim($category);
                // Str::slug = string to slug 
                $category_url = Str::slug($category);
                $cat_ref = Category::where('category_url', $category_url)->first();
                if (is_null($cat_ref)) {
                    $cat_ref = new Category([
                        'category' => $category,
                        'category_url' => $category_url
                    ]);
                    $project->categories()->save($cat_ref);
                } else {
                    $project->categories()->attach($cat_ref->id);
                }
            }
        }

        $project->update($request->all());
        return redirect(route('projects.index'))->withOk("Le projet " . $request->input('titre') . " a été modifié avec succès!");
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
        $project->categories()->detach();
        $project->delete();
        return redirect()->back();
    }

    public function projectsWithCategory($category) {
        $projects = Project::with('categories')
                        ->orderBy('category', 'desc')
                        ->whereHas('categories', function($q) use ($category) {
                            $q->where('categories.category_url', $category);
                        })->paginate($this->nbProjectsPerPage);
                        
        //return $projects;  // pour tester rapidement que la méthode fonctionne
        $links=$projects->render();
        return view('admin.project.view_projects', compact('projects','links'))
                ->with('info', 'Les projets de la catégorie : ' . $category);
    } 
}
