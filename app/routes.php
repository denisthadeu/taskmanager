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
Route::controller('cronograma', 'CronogramaController');
Route::controller('equipe', 'EquipeController');
Route::controller('home','HomeController');
Route::controller('id', 'IdController');
Route::controller('mensagem', 'MensagemController');
Route::controller('password', 'RemindersController');
Route::controller('tarefa', 'TarefaController');
Route::get('tarefa/list/{id}', 'TarefaController@getList');
Route::controller('tarefatipo', 'TarefatipoController');
Route::controller('user', 'UserController');