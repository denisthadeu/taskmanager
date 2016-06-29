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
					    $query->where('data_ini','like',$dataFiltro.'%')->orWhere('data_ini','like',$dataFiltro.'%')->with('meusetor')->with('usertempo');
					}])
				->OrderBy('nome');
				}]);
			}])->OrderBy('nome');
		if(!empty($dataSetor)){
			$equipes = $equipes->where('id','=',$dataSetor);
		}
		$equipes = $equipes->with('equipeUser')->get();
		$results = null;
		//pega as equipes
		foreach($equipes AS $equipe){
			$results[$equipe->id]["id"] = $equipe->id;
			$results[$equipe->id]["nome"] = $equipe->nome;
			$results[$equipe->id]["colspan"] = 0;
			$results[$equipe->id]["horasEstipuladas"] = 0;
			$results[$equipe->id]["horasFeitas"] = 0;
			$results[$equipe->id]["clientes"] = array();
			$arrUsuarios = array();
			foreach ($equipe->equipeUser as $key => $equipeUser) {
				$arrUsuarios[] = $equipeUser->user_id;
			}
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
					if(in_array($tarefa->user_id, $arrUsuarios)){
						$tipotarefa = $tarefa->meusetor;
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
			}
			$results[$equipe->id]["colspan"] = 1;
			foreach ($results[$equipe->id]["clientes"] as $cliente) {
				$results[$equipe->id]["colspan"] += $cliente["colspan"] + 1;
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

	public function getCronogramademandainline()
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
					    $query->where('data_ini','like',$dataFiltro.'%')->orWhere('data_ini','like',$dataFiltro.'%')->with('meusetor')->with('tipo')->with(['usertempo' => function($query) use($dataFiltro)
						{
						    $query->with('user');
						}]);
					}])
				->OrderBy('nome');
				}]);
			}])->OrderBy('nome');
		if(!empty($dataSetor)){
			$equipes = $equipes->where('id','=',$dataSetor);
		}
		$equipes = $equipes->with('equipeUser')->get();
		$results = null;
		$countRes = 0;
		//pega as equipes
		foreach($equipes AS $equipe){
			$results[$equipe->id]["id"] = $equipe->id;
			$results[$equipe->id]["nome"] = $equipe->nome;
			$results[$equipe->id]["colspan"] = 0;
			$results[$equipe->id]["horasEstipuladas"] = 0;
			$results[$equipe->id]["horasFeitas"] = 0;
			$results[$equipe->id]["clientes"] = array();
			$arrUsuarios = array();
			foreach ($equipe->equipeUser as $key => $equipeUser) {
				$arrUsuarios[] = $equipeUser->user_id;
			}
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
					if(in_array($tarefa->user_id, $arrUsuarios)){
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tarefas"][] = $tarefa->id;
						$setortarefa = $tarefa->meusetor;
						if(empty($setortarefa)){
							$setortarefa = new Tarefatipo();
							$setortarefa->id = 0;
							$setortarefa->nome = "Cronograma";
						}

						$tipotarefa = $tarefa->tipo;
						if(empty($tipotarefa)){
							$tipotarefa = new Tarefatipo();
							$tipotarefa->id = 0;
							$tipotarefa->nome = "Cronograma";
						}
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["id"] = $setortarefa->id;
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["nome"] = $setortarefa->nome;
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["id"] = '<a href="'.URL::to('tarefa/edit').'/'.$tarefa->id.'">'.$tarefa->id."</a>";
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["minutosOrcado"] = $tarefa->minutos;
						if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["projetos"])){
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["projetos"] = 1;
						} else {
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["projetos"]++;
						}
						if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasEstipuladas"])){
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasEstipuladas"] = $tarefa->minutos;
						} else {
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasEstipuladas"] += $tarefa->minutos;
						}
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["tipo"] = $tipotarefa->nome;
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["horasEstipuladas"] += $tarefa->minutos;
						$results[$equipe->id]["horasEstipuladas"] += $tarefa->minutos;

						if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasFeitas"])){
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasFeitas"] = 0;
						}
						//tempo da equipe neste tipo de tarefa do cliente
						foreach($tarefa->usertempo AS $tempo){
							if(!empty($tempo->minutos)){
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasFeitas"] += $tempo->minutos;
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["horasFeitas"] += $tempo->minutos;
								$results[$equipe->id]["horasFeitas"] += $tempo->minutos;
								$tempoTarefaTotal = $tempo->minutos;
							} else {
								if(empty($tempo->data_fim)){
									$tempo->data_fim = Formatter::dataAtualDB();
								}
								$tempoTarefaTotal = Formatter::minutesBetweenDates($tempo->data_ini,$tempo->data_fim);
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasFeitas"] += $tempoTarefaTotal;
							}
							if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["minutostrabalhado"])){
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["minutostrabalhado"] = 0;
							}
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["minutostrabalhado"] += $tempoTarefaTotal;


							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasFeitasDscriminado"]["usuarios"][$tempo->user_id]["nome"] = $tempo->user->nome;
							if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasFeitasDscriminado"]["usuarios"][$tempo->user_id]["tempo"])){
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasFeitasDscriminado"]["usuarios"][$tempo->user_id]["tempo"] = 0;
							}
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["horasFeitasDscriminado"]["usuarios"][$tempo->user_id]["tempo"] += $tempoTarefaTotal;


							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["horasFeitasDscriminado"]["usuarios"][$tempo->user_id]["nome"] = $tempo->user->nome;
							if(!isset($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["horasFeitasDscriminado"]["usuarios"][$tempo->user_id]["tempo"])){
								$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["horasFeitasDscriminado"]["usuarios"][$tempo->user_id]["tempo"] = 0;
							}
							$results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"][$setortarefa->id]["tarefas"][$tarefa->id]["horasFeitasDscriminado"]["usuarios"][$tempo->user_id]["tempo"] += $tempoTarefaTotal;
						}
						$results[$equipe->id]["clientes"][$tarefa->clientes_id]["colspan"] = count($results[$equipe->id]["clientes"][$tarefa->clientes_id]["tipo"]);
					}
				}
			}
			$results[$equipe->id]["colspan"] = 1;
			foreach ($results[$equipe->id]["clientes"] as $cliente) {
				$results[$equipe->id]["colspan"] += $cliente["colspan"] + 1;
			}
		}
		// echo "<pre>";print_r($results);exit;
		$html = '
		<table class="table table-bordered" style="background-color: #fff">
            <thead>
                <tr>
                    <th colspan="9" style="text-align: center;background-color: #B7DEE8;color: #8B9295">SERVIÇO POR CLIENTE (Inline) '.$titulo.'</th>
                </tr>
                <tr>
                    <td colspan="9" style="text-align: center;">&nbsp;</td>
                </tr>
                <tr>
                    <th style="background-color: #31869B;color: white;text-align: center;">SETOR</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">CLIENTE</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">SERVIÇO</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">TIPO</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">TAREFA</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">TOTAL HORAS ESTIPULADAS</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">TOTAL HORAS TRABALHADAS</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">FUNCIONÁRIO</th>
                    <th style="background-color: #31869B;color: white;text-align: center;">HORAS TRABALHADAS</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">';
            foreach ($results as $key => $res) {
            	if(isset($res["clientes"]) && !empty($res["clientes"])){
            		foreach($res["clientes"] AS $clientes){
            			if(isset($clientes["tipo"]) && !empty($clientes["tipo"])){
            				foreach ($clientes["tipo"] as $keyTipo => $tipo) {
            					foreach ($tipo["tarefas"] as $indicetarefas => $tarefa) {
            						$resumo_tempo_real = '<td class="col-md-1">-</td><td class="col-md-1">-</td>';
            						if(isset($tarefa["horasFeitasDscriminado"])){
            							$resumo_tempo_real = '';
            							$indiceTempoDiscriminado = 0;
            							foreach ($tarefa["horasFeitasDscriminado"]["usuarios"] as $tempoDiscriminado) {
											// $resumo_tempo_real = $tempoDiscriminado["nome"].' ('.Formatter::convertToHoursMins($tempoDiscriminado["tempo"]).")";
											$resumo_tempo_real .= '<td class="col-md-1">'.$tempoDiscriminado["nome"].'</td><td class="col-md-1">'.Formatter::convertToHoursMins($tempoDiscriminado["tempo"]).'</td>';
            								$indiceTempoDiscriminado++;
            							}
            						}
            						$minutosTrabalhados = 0;
            						if(isset($tarefa["minutostrabalhado"])){
            							$minutosTrabalhados = $tarefa["minutostrabalhado"];
            						}
            						$html .= '
					            	<tr>
					            		<td>'.$res["nome"].'</td>
					            		<td>'.$clientes["nome"].'</td>
					            		<td>'.$tipo["nome"].'</td>
					            		<td>'.$tarefa["tipo"].'</td>
					            		<td class="col-md-1">'.$tarefa["id"].'</td>
					            		<td>'.Formatter::convertToHoursMins($tarefa["minutosOrcado"]).'</td>
					            		<td>'.Formatter::convertToHoursMins($minutosTrabalhados).'</td>
					            		'.$resumo_tempo_real.'
					            	</tr>
					            	';
            					}
            				}
            			} else{
            				// $html .= '
			            	// <tr>
			            	// 	<td>'.$res["nome"].'</td>
			            	// 	<td>'.$clientes["nome"].'</td>
			            	// 	<td>-</td>
			            	// 	<td>-</td>
			            	// 	<td>00:00</td>
			            	// 	<td>00:00</td>
			            	// 	<td>-</td>
			            	// </tr>
			            	// ';
            			}
	            	}
            	} else {
            		// $html .= '
	            	// <tr>
	            	// 	<td>'.$res["nome"].'</td>
	            	// 	<td>-</td>
	            	// 	<td>-</td>
	            	// 	<td>-</td>
	            	// 	<td>00:00</td>
	            	// 	<td>00:00</td>
	            	// 	<td>-</td>
	            	// </tr>
	            	// ';
            	}
            }
		$html .= '
			</tbody>
        </table>';
        if(Input::has('excel')){
        	header('Content-Disposition: attachment; filename="ServicoPorClienteInline'.$dataFiltro.'.xls"');
			header("Cache-control: private");
			// header("Content-type: application/force-download");
			header("Content-transfer-encoding: binary\n");
			header("Content-type: application/vnd.ms-excel; charset=UTF-8");
			echo mb_convert_encoding($html , "HTML-ENTITIES", "UTF-8");	
        } else  {
			$equipesFiltro = Equipe::OrderBy('nome')->get();
			return View::make('relatorio.cronogramademanadainline',compact('results','dataFiltro','titulo','dataSetor','equipesFiltro','html'));
		}
	}
}
