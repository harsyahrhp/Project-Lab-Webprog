<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('Register', [
            'title' => 'Register',
            'active' => 'Register'
        ]);
    }

    public function store(Request $request){
        $validateData = $request -> validate([
            'name'=> 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password1' => 'required|same:password'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);

        return redirect('/Login');
    }

}
