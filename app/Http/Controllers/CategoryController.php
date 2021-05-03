<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Illuminate\Database\QueryException;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::orderBy('categories.category','asc')->get();
        return view('admin.category.view_categories')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.view_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::create([
            'category' => $request->category,
            'category_url' => Str::slug($request->category)
        ]);

        return redirect('categories')->withOk("La catégorie " . $category->category . " a été créée.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.view_show')->with("category", $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.view_edit')->with("category", $category);
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
        Category::findOrFail($id)->update([
            'category' => $request->category,
            'category_url' => Str::slug($request->category)
        ]);
        return redirect('categories')->withOk("La catégorie " . $request->input('category') . " a été modifiée.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Category::findOrFail($id)->delete();
        } catch (QueryException $error){
            return redirect('categories')->withOk("Impossible de supprimer la catégorie n°".$id.". Elle est associée à un ou plusieurs projets.");
        }
        return redirect('categories')->withOk("La catégorie n°".$id." a été supprimée.");
    }
}
