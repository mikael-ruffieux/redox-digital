<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

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
        return view('admin.services.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $statement = DB::table('services')->where('id', \DB::raw("(select max(`id`) from services)"))->get();
        $nextId = $statement[0]->id+1;

        // Saving image
        $image = $request->file('image');
        $name = "$nextId.".$image->getClientOriginalExtension();
        $destinationPath = public_path('storage/services');
        $image->move($destinationPath, $name);

        $newService = [
            "title" => $request->title,
            "description" => $request->description,
            "image" => "storage/services/" . $name,
            "isChild" => $request->parent_id != "null",
            "parent_id" => $request->parent_id == "null" ? null : $request->parent_id,
        ];
        
        Service::create($newService);
        return redirect(route('services.index'))->with('alert', "Le service " . $newService['title'] . " a été créé.");
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
        if($request->parent_id == "null") {
            $isChild = false;
            $parent_id = null;
        } else {
            $isChild = true;
            $parent_id = intval($request->parent_id);
        }

        $updatedData = [
            'title' => $request->title,
            'description' => $request->description,
            'isChild' => $isChild,
            'parent_id' => $parent_id
        ];

        // If new file is uploaded
        if ($request->hasFile('image')) {

            // Saving image
            $image = $request->file('image');
            $name = "$id.".$image->getClientOriginalExtension();
            $destinationPath = public_path('storage/services');
            $image->move($destinationPath, $name);

            $updatedData["image"] = "storage/services/" . $name;
        }
        
        $service = Service::find($id);
        $service->update($updatedData);

        return redirect(route('services.edit', [$id]))->with('alert', "Le service " . $request->title . " a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if(sizeof($service->categories) == 0 && sizeof($service->children) == 0) {
            // supprimer les accordéons : 
            foreach ($service->accordions as $accordion) {
                $accordion->delete();
            }

            // supprimer le service :
            $service->delete();
            return redirect(route('services.index'))->with('alert', "Le service a été supprimé avec succès.");

        } elseif (sizeof($service->categories) == 0 && sizeof($service->children) != 0) {
            return redirect()->back()->with('alert', "Impossible de supprimer le service, car il est parent d'autres services.");
        
        } else {
            return redirect()->back()->with('alert', "Impossible de supprimer le service, car il est lié à un ou plusieurs projets.");
        }
    }
}
