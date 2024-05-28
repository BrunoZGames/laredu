<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index')->with([
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $rules = [
            //Ponemos las reglas que necesitamos
        ];

        //Mirar como poner el creation_user

        $request->validate($rules);

        $user = User::create($request->all());

        return redirect()->route('admin.users.index')
            ->with('success', "Usuario registrado con éxito");
    }

    public function show(User $user)
    {
        return view('admin.users.show')->with([
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit')->with([
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        //Mirar como guardar los campos de update_user
        $user->fill($request->all());

        $user->save();

        return redirect()->route('admin.users.index')
            ->with('success', "El usuario {$user->username} se editó con éxito.");
    }

    public function destroy(User $user)
    {
        $user->delete();
        
        return redirect()->route('admin.users.index')
            ->with('success', "El usuario {$user->username} se eliminó con éxito.");
    }
}
