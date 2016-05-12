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
		$dbSearchTaskIni = null;
		$dbSearchTaskFim = null;
		if(Input::has('dt_ini') || Input::has('dt_fim')){
			$dt_ini = (!empty(Input::has('dt_ini'))) ? Input::get('dt_ini') : null;
			$dt_fim = (!empty(Input::has('dt_fim'))) ? Input::get('dt_fim') : null;
			if(!empty($dt_ini))
				$dbSearchTaskIni = Formatter::stringToDate($dt_ini).' 00:00:00';
			if(!empty($dt_fim))
				$dbSearchTaskFim = Formatter::stringToDate($dt_fim).' 23:59:59';
		} else {
			$dt_ini = null;
			$dt_fim = date('d/m/Y');
			$dbSearchTaskIni = null;
			$dbSearchTaskFim = Formatter::stringToDate($dt_fim).' 23:59:59';
		}
		// $dataFinalDia = Formatter::dataAtualDB2();
		$minhasTarefas = Tarefa::with('cliente')
						->with('projeto')
						->with('statustarefa')
						->where('user_id','=',Auth::id())
						->whereNotIn('tarefa_status_id',array(6))
						->OrderBy('order');
		if(!empty($dbSearchTaskIni))
			$minhasTarefas = $minhasTarefas->where('data_ini','>=',$dbSearchTaskIni);
		if(!empty($dbSearchTaskFim))
			$minhasTarefas = $minhasTarefas->where('data_ini','<=',$dbSearchTaskFim);
		$minhasEquipes = Equipe::where('user_id','=',Auth::id())->with(['equipeUser' => function($query) use ($dbSearchTaskIni,$dbSearchTaskFim)
						{
						    $query->with(['user' => function($query) use ($dbSearchTaskIni,$dbSearchTaskFim)
							{
							    // $query->with('minhastarefashoje')->OrderBy('nome');
							    $query->with(['tarefasresponsavel' => function($query) use ($dbSearchTaskIni,$dbSearchTaskFim)
								{
								    // $query->with('minhastarefashoje')->OrderBy('nome');
								    $query->whereNotIn('tarefa_status_id',array(6))->OrderBy('order');
								    
								    if(!empty($dbSearchTaskIni))
										$query = $query->where('data_ini','>=',$dbSearchTaskIni);
									if(!empty($dbSearchTaskFim))
										$query = $query->where('data_ini','<=',$dbSearchTaskFim);
								}])->OrderBy('nome');
							}]);
						}])->OrderBy('nome');
		$minhasTarefas = $minhasTarefas->get();
		$minhasEquipes = $minhasEquipes->get();
		return View::make('id.index',compact('minhasTarefas','minhasEquipes','dt_ini','dt_fim'));
	}

}
