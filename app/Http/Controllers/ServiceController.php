<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(10);
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Service::where('isChild', 0)->get();
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.services.show')->with('service', Service::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $parents = Service::where('isChild', 0)->get();
        return view('admin.services.edit', compact('service', 'parents'));
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
        if($request->input('parent_id') == "null") {
            $isChild = false;
            $parent_id = null;
        } else {
            $isChild = true;
            $parent_id = intval($request->input('parent_id'));
        }
        
        $service = Service::find($id);
        $service->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => "storage/services/$id.jpg",
            'isChild' => $isChild,
            'parent_id' => $parent_id
        ]);
        return redirect(route('services.index'))->with('alert', "Le service " . $request->input('title') . " a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
