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

    public function show($id){
//        dd($id);
        $user = User::find($id);
            return view('register.edit')->with(compact('user'));
    }

        public function update(Request $request){

            $this->validate($request,[
                'first_name' => ['string', 'max:255'],
                'middle_name' => ['string', 'max:255'],
                'last_name' => ['string', 'max:255'],
//                'email' => [ 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['same:password'],g
            ]);
//            dd($request->all());
            $user = User::find($request->user_id);
            if(empty($request->first_name)){
                $request->first_name = $user->first_name;
            }
            if(empty($request->middle_name)){
                $request->middle_name = $user->middle_name;
            }
            if(empty($request->last_name)){
                $request->last_name = $user->last_name;
            }
            if(empty($request->email)){
                $request->email = $user->email;
            }
            if(empty($request->password)){

                $user->first_name = $request->first_name;
                $user->middle_name = $request->middle_name;
                $user->last_name = $request->last_name;
                $user->email = $request->email;
                $user->password = $user->password;
                $user->save();
                return redirect(route('user.index'));
            }

            $user->first_name = $request->first_name;
            $user->middle_name = $request->middle_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect(route('user.index'));
//            dd($request->password);







    }

    public function create(){
        $role = Role::get();
        return view('register.create')->with(compact('role'));
    }

    public function store(Request $request){
            dd($request->all());
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
            'role_id' => 1,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/user')->with('ok','User Successfully Save!');

    }
}
