<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $createRole = Role::create(['name'=>'member']);
        // $createRole = Role::create(['name'=>'admin']);
        // $createRole = Role::create(['name'=>'owner']);

        return view('home', ['section' => 'home']);
    }
}
