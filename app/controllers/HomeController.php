<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function __construct() {
	    $this->beforeFilter('auth');
  	}
  	

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getIndex()
	{
		$dataFinalDia = Formatter::dataAtualDB2();
		$minhasTarefas = Tarefa::with('cliente')
						->with('projeto')
						->with('statustarefa')
						->where('user_id','=',Auth::id())
						->whereNotIn('tarefa_status_id',array(6))
						->where('data_ini','<=',$dataFinalDia)
						->get();

		$minhasEquipes = Equipe::where('user_id','=',Auth::id())->with(['equipeUser' => function($query)
						{
						    $query->with(['user' => function($query)
							{
							    $query->with('minhastarefashoje');
							}]);
						}])
						->get();
		return View::make('id.index',compact('minhasTarefas','minhasEquipes'));
	}

}
