<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OwnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $createRole = Role::create(['name'=>'member']);
        // $createRole = Role::create(['name'=>'admin']);
        // $createRole = Role::create(['name'=>'owner']);

       // return view('home', ['section' => 'home']);

        //User::first()->roles()->attach(2);



        //return User::with('roles')->first();


        $user = User::first();

        if($user->hasRole('owner')) return 'you are the owner';

        //return 'you are not the owner';
    }

}
