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
		if(Input::has('filtro-data')){
			$dataFiltro = Input::get('filtro-data');
		} else {
			$dataFiltro = date('Y-m');
		}
		if(Input::has('filtro-setor')){
			$dataSetor = Input::get('filtro-setor');
		} else {
			$dataSetor = 0;
		}
		$titulo = Formatter::dataExtenso($dataFiltro);
		$equipes = Equipe::with(['equipeCliente' => function($query) use($dataFiltro)
			{
			    $query->with(['cliente' => function($query) use($dataFiltro)
				{
				    $query->with(['tarefas' => function($query) use($dataFiltro)
					{
					    $query->where('data_ini','like',$dataFiltro.'%')->orWhere('data_ini','like',$dataFiltro.'%')->with('tipo')->with('usertempo');
					}])
				->OrderBy('nome');
				}]);
			}])->OrderBy('nome');
		if(!empty($dataSetor)){
			$equipes = $equipes->where('id','=',$dataSetor);
		}
		$equipes = $equipes->get();
		$results = null;
		//pega as equipes
		foreach($equipes AS $equipe){
			$results[$equipe->id]["id"] = $equipe->id;
			$results[$equipe->id]["nome"] = $equipe->nome;
			$results[$equipe->id]["colspan"] = 0;
			$results[$equipe->id]["horasEstipuladas"] = 0;
			$results[$equipe->id]["horasFeitas"] = 0;
			$results[$equipe->id]["clientes"] = array();
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
				$results[$equipe->id]["clientes"][$cliente->id]["tipo"] = array();
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
						$results[$equipe->id]["horasEstipuladas"] += $tarefa->minutos;

						if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasFeitas"])){
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasFeitas"] = 0;
						}
						//tempo da equipe neste tipo de tarefa do cliente
						foreach($tarefa->usertempo AS $tempo){
							if(!empty($tempo->minutos)){
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$tipotarefa->id]["horasFeitas"] += $tempo->minutos;
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["horasFeitas"] += $tempo->minutos;
								$results[$equipe->id]["horasFeitas"] += $tempo->minutos;
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
				if(empty(count($results[$equipe->id]["clientes"][$cliente->id]["tipo"]))){
					$results[$equipe->id]["colspan"] += 2;
				} else {
					$results[$equipe->id]["colspan"] += count($results[$equipe->id]["clientes"][$cliente->id]["tipo"]) + 1;
				}
			}
			$results[$equipe->id]["colspan"]++;
			if($results[$equipe->id]["colspan"] == 1){
				$results[$equipe->id]["colspan"] = 2;
			}
		}

		if(Input::has('excel')){
			$html = '<html>';
			    $html .= '<head>';
			        $html .= '<title></title>';
			        $html .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
			    $html .= '</head>';
			    $html .= '<body>';
			        $html .= '<table style="background-color: #fff">';
			            $html .= '<thead>';

			                $html .= '<tr>';
			                    $html .= '<th colspan="6" style="text-align: center;background-color: #B7DEE8;color: #8B9295">SERVIÇO POR CLIENTE '.$titulo.'</th>';
			                $html .= '</tr>';
			                $html .= '<tr>';
			                    $html .= '<td colspan="6" style="text-align: center;">&nbsp;</td>';
			                $html .= '</tr>';
			                $html .= '<tr>';
			                    $html .= '<th style="background-color: #31869B;color: white;text-align: center;">SETOR</th>';
			                    $html .= '<th style="background-color: #31869B;color: white;text-align: center;">CLIENTE</th>';
			                    $html .= '<th style="background-color: #31869B;color: white;text-align: center;">SERVIÇO</th>';
			                    $html .= '<th style="background-color: #31869B;color: white;text-align: center;">PRODUÇÃO</th>';
			                    $html .= '<th style="background-color: #31869B;color: white;text-align: center;">TOTAL HORAS ESTIPULADAS</th>';
			                    $html .= '<th style="background-color: #31869B;color: white;text-align: center;">TOTAL HORAS TRABALHADAS</th>';
			                $html .= '</tr>';
			            $html .= '</thead>';
			            $html .= '<tbody style="text-align: center;">';
			                if(isset($results) && !empty($results)){
			                    foreach($results as $keyResult => $result) {
			                        $html .= '<tr>';
			                            $html .= '<td colspan="6" style="text-align: center;color:#31869B;"><b>'.$result["nome"].'</b></td>';
			                        $html .= '</tr>';
			                        $html .= '<tr>';
			                            $html .= '<td rowspan="'.$result["colspan"].'" style="background-color: #31869B;color: white;vertical-align: middle;">'.$result["nome"].'</td>';
			                            foreach($result["clientes"] as $keyCliente => $cliente) {
			                                $html .= '<td rowspan="'.$cliente["colspan"].'" style="background-color: #8DB4E2;color:white;vertical-align: middle;">'.$cliente["nome"].'</td>';
			                                $contador = 0;
			                                if(empty($cliente["tipo"])){
				                                	$html .= '<td style="background-color: #8DB4E2;color: white;">-</td>';
			                                        $html .= '<td style="background-color: #8DB4E2;color: white;">-</td>';
			                                        $html .= '<td style="background-color: #8DB4E2;color: white;text-align: right;">00:00</td>';
			                                        $html .= '<td style="background-color: #8DB4E2;color: white;text-align: right;">00:00</td>';
			                                    $html .= '</tr>';
			                                } else {
			                                	foreach($cliente["tipo"] as $keyTipo => $tipo) {
				                                    if($contador > 0) {
				                                        $html .= '<tr>';
				                                    }
				                                        $html .= '<td style="text-align: left; background-color: #8DB4E2;color: white;">'.$tipo["nome"].'</td>';
				                                        $html .= '<td style="background-color: #8DB4E2;color: white;">'.$tipo["projetos"].'</td>';
				                                        $html .= '<td style="background-color: #8DB4E2;color: white;text-align: right;">'.Formatter::convertToHoursMins($tipo["horasEstipuladas"]).'</td>';
				                                        $html .= '<td style="background-color: #8DB4E2;color: white;text-align: right;">'.Formatter::convertToHoursMins($tipo["horasFeitas"]).'</td>';
				                                    $html .= '</tr>';
				                                    $contador++;
				                                }
			                                }
			                                $html .= '<tr>';
			                                    $html .= '<td colspan="3">&nbsp;</td>';
			                                    $html .= '<td style="background-color: #31869B;color: white;">'.Formatter::convertToHoursMins($cliente["horasEstipuladas"]).'</td>';
			                                    $html .= '<td style="background-color: #31869B;color: white;">'.Formatter::convertToHoursMins($cliente["horasFeitas"]).'</td>';
			                                $html .= '</tr>';
			                            }
			                        $html .= '<tr>';
				                        $html .= '<td colspan="3">&nbsp;</td>';
				                        $html .= '<td style="background-color: #31869B;color: white;">Total:'.Formatter::convertToHoursMins($result["horasEstipuladas"]).'</td>';
				                        $html .= '<td style="background-color: #31869B;color: white;">Total:'.Formatter::convertToHoursMins($result["horasFeitas"]).'</td>';
				                    $html .= '</tr>';
		                            $html .= '<tr>';
		                                $html .= '<td colspan="6">&nbsp;</td>';
		                            $html .= '</tr>';
			                    }
			                }
			            $html .= '</tbody>';
			        $html .= '</table>';
			    $html .= '</body>';
			$html .= '</html>';

			header('Content-Disposition: attachment; filename="ServicoPorCliente'.$dataFiltro.'.xls"');
			header("Cache-control: private");
			header("Content-type: application/force-download");
			header("Content-transfer-encoding: binary\n");
			echo $html;			
			exit;
		} else {
			$equipesFiltro = Equipe::OrderBy('nome')->get();
			return View::make('relatorio.cronogramademanada',compact('results','dataFiltro','titulo','dataSetor','equipesFiltro'));
		}
	}


}
