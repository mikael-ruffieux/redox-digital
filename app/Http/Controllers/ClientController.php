<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('name', 'ASC')->get();
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.clients.show')->with('client', Client::find($id));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $statement = DB::table('clients')->where('id', \DB::raw("(select max(`id`) from clients)"))->get();
        $nextId = $statement[0]->id+1;

        // Saving image
        $image = $request->file('logo');
        $name = "$nextId.".$image->getClientOriginalExtension();
        $destinationPath = public_path('storage/clients');
        $image->move($destinationPath, $name);

        $newClient = [
            'name' => $request->name,
            'link' => $request->link,
            'logo' => "storage/clients/" . $name,
        ];

        $client = Client::create($newClient);
        return redirect(route('clients.index'))->with('alert', "Le client " . $client->name . " a été créé.");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.clients.edit')->with('client', Client::find($id));
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
        $updatedData = [
            'name' => $request->name,
            'link' => $request->link,
        ];

        // If new file is uploaded
        if ($request->hasFile('logo')) {

            // Saving image
            $image = $request->file('logo');
            $name = "$id.".$image->getClientOriginalExtension();
            $destinationPath = public_path('storage/clients');
            $image->move($destinationPath, $name);

            $updatedData["logo"] = "storage/clients/" . $name;
        }

        Client::find($id)->update($updatedData);
        return redirect(route('clients.index'))->with('alert', "Le client " . $request->input('name') . " a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        // If the client has no project
        if(sizeof($client->projects) == 0) {
            $client->delete();
            return redirect(route('clients.index'))->with('alert', "Le client a été supprimé avec succès.");
        } else {
            return redirect()->back()->with('alert', "Impossible de supprimer le client, car il est lié à un ou plusieurs projets.");
        }
    }
}
