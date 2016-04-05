<?php

class RelatorioController extends BaseController {

	/*
	| GitHub Relatorio https://github.com/Maatwebsite/Laravel-Excel/tree/1.3
	*/
	public function __construct() {
	    $this->beforeFilter('auth');
  	}
  	
  	
	public function getIndex()
	{
		return View::make('erro.embreve');
	}

	public function getCronogramademanda()
	{
		$equipes = Equipe::with(['equipeCliente' => function($query)
			{
			    $query->with(['cliente' => function($query)
				{
				    $query->with(['tarefas' => function($query)
					{
					    $query->with('tipo')->with('usertempo');
					}])
				->OrderBy('nome');
				}]);
			}])->get();
		$results = null;
		//pega as equipes
		foreach($equipes AS $equipe){
			$results[$equipe->id]["id"] = $equipe->id;
			$results[$equipe->id]["nome"] = $equipe->nome;
			$results[$equipe->id]["colspan"] = 0;
			//pega os clientes que a equipe atende
			foreach($equipe->equipeCliente AS $key => $equipeCliente){
				$cliente = $equipeCliente->cliente;
				$results[$equipe->id]["Arrclientes"]["id"][] = $cliente->id;
				$results[$equipe->id]["clientes"][$cliente->id]["id"] = $cliente->id;
				$results[$equipe->id]["clientes"][$cliente->id]["nome"] = $cliente->nome;
				$results[$equipe->id]["clientes"][$cliente->id]["colspan"] = 1;
				if(!isset($results[$equipe->id]["clientes"][$cliente->id]["horasEstipuladas"]))
					$results[$equipe->id]["clientes"][$cliente->id]["horasEstipuladas"] = 0;
				if(!isset($results[$equipe->id]["clientes"][$cliente->id]["horasFeitas"]))
					$results[$equipe->id]["clientes"][$cliente->id]["horasFeitas"] = 0;
				$tarefas = $cliente->tarefas;
				// tarefas da equipe deste cliente
				foreach($tarefas AS $keytarefa => $tarefa){
					if($equipe->equipeUserId($tarefa->user_id)){
						$tipotarefa = $tarefa->tipo;
						if(empty($tipotarefa)){
							$tipotarefa = new Tarefatipo();
							$tipotarefa->id = 0;
							$tipotarefa->nome = "Cronograma";
						}
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["id"] = $tipotarefa->id;
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["nome"] = $tipotarefa->nome;
						if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["projetos"])){
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["projetos"] = 1;
						} else {
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["projetos"]++;
						}
						if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasEstipuladas"])){
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasEstipuladas"] = $tarefa->minutos;
						} else {
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasEstipuladas"] += $tarefa->minutos;
						}

						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["horasEstipuladas"] += $tarefa->minutos;

						if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasFeitas"])){
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasFeitas"] = 0;
						}
						//tempo da equipe neste tipo de tarefa do cliente
						foreach($tarefa->usertempo AS $tempo){
							if(!empty($tempo->minutos)){
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasFeitas"] += $tempo->minutos;
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["horasFeitas"] += $tempo->minutos;
							} else {
								if(empty($tempo->data_fim)){
									$tempo->data_fim = Formatter::dataAtualDB();
								}
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasFeitas"] += Formatter::minutesBetweenDates($tempo->data_ini,$tempo->data_fim);
							}
							// $results[$equipe->id]["clientes"][$tarefa->clientes_id]["horasFeitas"] += $results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasFeitas"];
						}
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["colspan"] = count($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"]);
					}
				}
				$results[$equipe->id]["colspan"] += count($results[$equipe->id]["clientes"][$cliente->id]["tipo"]) + 1;
			}
		}
		// echo "<pre>"; print_r($results); die('');
		if(Input::has('excel')){
			Excel::create('ServicoPorCliente', function($excel) use ($results) {
			    $excel->sheet('New sheet', function($sheet) use ($results) {
			        $sheet->loadView('relatorio.cronogramademanadaExcel', array('results' => $results));
			        $sheet->setOrientation('landscape');
			    });
			})->export('xls');
			// return View::make('erro.embreve');
		} else {
			return View::make('relatorio.cronogramademanada',compact('results'));
		}
	}


}
