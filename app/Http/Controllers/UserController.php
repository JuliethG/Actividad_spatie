<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        $users = User::find($id);
        return view('users.show',compact('users'));
    }

    public function store(Request $request)
    {
        $users = User::create([
            'id'=>$request->input('id'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]);
        return redirect('users')->with('status', 'Usuario '.$request->input('name').' creado');
    }

    public function destroy($id)
    {
        $users = User::find($id)->delete();
        return redirect('users')->with('status', 'Usuario '.$id.' eliminado');
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('users.edit',compact('users'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id)->update([
            'id'=>$request->input('id'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]);
        Return redirect('users')->with('status','Se ha actualizado correctamente '.$request->input('name'));

    }
}
