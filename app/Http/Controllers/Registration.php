<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Registration extends Controller
{
    //
    public function index(){
        $users = User::get();
        return view('register.index')->with(compact('users'));
    }

    public function create(){
        $role = Role::get();
        return view('register.create')->with(compact('role'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'first_name' => $request['first_name'],
            'middle_name' => $request['middle_name'],
            'last_name' => $request['last_name'],
            'role_id' => $request['role_id'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/user')->with('ok','User Successfully Save!');

    }
}
