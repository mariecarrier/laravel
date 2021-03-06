<?php

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

Route::get('/', 'AccueilController@index');

/*Route::get('/inscription/', 'InscriptionController@index');*/


Route::get('/inscription/', function() 
{
    return View::make('inscription')->with('name', 'friend');
});

Route::get('/inscription-test/', function() 
{
    return View::make('inscription-test')->with('name', 'friend');
});

Route::get('/inscription-v2/', function() 
{
    return View::make('inscription-v2')->with('name', 'friend');
});


Route::get('/db', function() 
{
    return DB::select('select database();');
});



Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
