<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function HomeUser(){
        return view('HomeUser', [
            'title' => 'Home',
            'active' => 'Home'
        ]);
    }
}
