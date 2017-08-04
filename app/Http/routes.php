<?php
use App\observation;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('boys','BoyController');

Route::resource('observations', 'ObservationsController');

Route::get('/observation/test', function () {

	/*$users = DB::table('observations')->get();

	foreach ($users as $user)
	{
    var_dump($user->id);
	}*/

	$data = Observation::all();

    return view('observation.test', compact('data'));
});