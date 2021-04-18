<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;

class UserController extends Controller
{
    // Seuls les utilisateurs authentifiés ont accès à ce controller
    public function __construct(){
        $this->middleware('auth');
    }

    private function setAdmin($request) {
        if (!$request->has('admin')) {
           $request->merge(['admin'=>0]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::paginate(4);   // permet de voir quatre utilisateurs à la fois
        $links=$users->render();    // permet de créer une "barre de navigation"
                                    // Remarque : La barre n'est visible que lorsqu'il y
                                    //            a plus de quatre utilisateurs !
        return view('admin.user.view_index', compact('users','links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.view_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserCreateRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request) {
        $this->setAdmin($request); // permet la gestion de la case à cocher (champ admin)
        $user = User::create($request->all());
        return redirect('user')->withOk("L'utilisateur " . $user->name . " a été créé.");
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $user = User::findOrFail($id);
        return view('admin.user.view_show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('admin.user.view_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->setAdmin($request);
        User::findOrFail($id)->update($request->all());
        return redirect('user')->withOk("L'utilisateur " . $request->input('name') . " a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back();
    }
}
