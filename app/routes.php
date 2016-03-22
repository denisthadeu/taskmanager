<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// return View::make('hello');
	if (Auth::check())
	{
		return Redirect::to('home');
	} else {
	    return Redirect::to('id/sign-in');		
	}
	
});


Route::controller('cliente', 'ClienteController');
Route::controller('id', 'IdController');
Route::controller('home','HomeController');
Route::controller('password', 'RemindersController');
Route::controller('user', 'UserController');