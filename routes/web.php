<?php

use App\Roles;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', function(){
	return redirect('/');
});

Route::get('/about', function () {
    return view('about', 	['section' => 'about']);
});
Route::get('/contact', function () {
    return view('contact', 	['section' => 'contact']);
});

Route::get('/calendar', 'CalendarController@index');

Auth::routes();

//Route::get('/profile', 'HomeController@index');




Route::get('/owner', 'OwnerController@index');


Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/{section}', ['uses'=>'DashboardController@show']);
Route::post('/dashboard/{section}', ['uses'=>'DashboardController@store']);

