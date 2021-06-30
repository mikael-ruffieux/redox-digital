<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Accordion;
use Illuminate\Http\Request;

class AccordionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($service_id)
    {
        $service = Service::find($service_id);
        return view('admin.accordions.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Accordion::create($request->all());
        return redirect(route('services.edit', [$request->input('service_id')]))->with('alert', "L'accordéon a été créé.");
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
        Accordion::findOrFail($id)->update($request->all());
        return redirect(route('services.edit', [$request->input('service_id')]))->with('alert', "L'accordéon a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Accordion::findOrFail($id)->delete();
        return redirect()->back()->with('alert', "L'accordéon a été supprimé avec succès.");
    }
}
