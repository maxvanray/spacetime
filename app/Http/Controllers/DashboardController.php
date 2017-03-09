<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Fixture;
use App\Location;
use App\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = 'myprofile';

        return view('dashboard', ['section' => 'dashboard', $section ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $section)
    {

        $username =  \Auth::user()->name;

        //---Classes (FIXTURES)---
        if($section=='manage-classes'){
            $fixture = new Fixture;
            $fixture->classid       = request('classid');
            $fixture->title         = request('classname');
            $fixture->category      = request('category');
            $fixture->description   = request('classdescription');
            $fixture->createdby     = $username;
            $fixture->save();
        }

        //---LOCATIONS---
        if($section=='manage-locations'){
            $location = new Location;
            $location->title        = request('title');
            $location->street       = request('street');
            $location->city         = request('city');
            $location->state        = request('state');
            $location->zip          = request('zip');
            $location->room         = request('room');
            $location->floor        = request('floor');
            $location->description  = request('description');
            $location->created_by    = $username;
            $location->save();
        }
        //---LOCATIONS---
        if($section=='manage-staff'){
            $incommingemail = request('email');
            $existinguser = DB::table('users')->where('email', $incommingemail )->first();

            return $existinguser;

            //$user = User::where('email', '=', Input::get('email'))->first();
            $user = new User;
            $user->name                     = request('name');
            $user->email                    = request('email');
            $user->password                 = bcrypt('changeme');
            $user->save();

            $staff = new Staff;
            $staff->title                   = request('name');
            $staff->email                   = $incommingemail;
            $staff->title                   = request('title');
            $staff->phone                   = request('phone');
            $staff->phone2                  = request('phone2');
            $staff->address                 = request('address');
            $staff->city                    = request('city');
            $staff->state                   = request('state');
            $staff->zip                     = request('zip');
            $staff->emergencycontact        = request('emergencycontact');
            $staff->emergencycontactnumber  = request('emergencycontactnumber');
            $staff->description             = request('description');
            $staff->created_by              = $username;
            $staff->save();

            // new User::create([
            //     'name' => $data['name'],
            //     'email' => $data['email'],
            //     'password' => bcrypt($data['password']),
            // ]);
        }

        return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $section)
    {
        //Get all the classes (aka fixtures)
        $locations  = Location::all();
        $fixtures   = Fixture::all();

        return view('dashboard', ['section' => $section, 'fixtures' => $fixtures, 'locations' => $locations ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
