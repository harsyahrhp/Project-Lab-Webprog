<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    public function HomeAdmin(){
        return view('HomeAdmin', [
            'title' => 'Home',
            'active' => 'Home'
        ]);
    }
}
