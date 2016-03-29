<?php

class TarefaController extends BaseController {

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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getIndex()
	{
		return View::make('id.index');
	}

	public function getList()
	{
		if(Input::has('search')){
			$search = Input::get('search');
		} else {
			$search = null;
		}
		$minhasTarefas = Tarefa::where('user_id','=',Auth::id())
								->with('cliente')
								->with('projeto')
								->with('statustarefa')
								->get();
		$tarefasCriadas = Tarefa::where('criado_por','=',Auth::id())
								->with('cliente')
								->with('projeto')
								->with('statustarefa')
								->with('responsavel')
								->get();
		return View::make('tarefa.list',compact('minhasTarefas','tarefasCriadas','search'));
	}

	public function getCreate()
	{
		$users = User::OrderBy('nome')->get();
		$tarefaTipos = Tarefatipo::OrderBy('nome')->get();
		$clientes = Clientes::with('clientesprojetos')->OrderBy('nome')->get();
		$cronogramas = Cronograma::with('descricao')->OrderBy('nome')->get();
		return View::make('tarefa.form',compact('users','tarefaTipos','clientes','cronogramas'));
	}

	public function getEdit($id)
	{
		$tarefa = Tarefa::where('id','=',$id)->with('anexos')->with(['comentarios' => function($query)
			{
			    $query->orderBy('id', 'desc')->with('anexos')->with('user');
			}])
			->first();
		$users = User::OrderBy('nome')->get();
		$tarefaTipos = Tarefatipo::OrderBy('nome')->get();
		$clientes = Clientes::with('clientesprojetos')->OrderBy('nome')->get();
		$tarefaStatus = Tarefastatus::OrderBy('nome')->get();
		$tarefausertempo = Tarefausertempo::where('tarefa_id','=',$tarefa->id)->OrderBy('id','DESC')->first();
		return View::make('tarefa.edit',compact('tarefa','users','tarefaTipos','clientes','tarefaStatus','tarefausertempo'));
	}

	public function getDelete($id)
	{
		$tarefa = Tarefa::where('id','=',$id)->delete();
		return Redirect::to('tarefa/list');
	}

	public function postSavetarefa()
	{
		extract(Input::all());
		// dd(Input::all());
		$idTarefa = 0;
		$tarefaProximo = 0;
		$tarefaAnterior = 0;
		if($opcao == "tipo"){
			$tarefa = new Tarefa();
			$cliente_id = 0;
			if(!empty($projeto)){
				$projetoObj = Clientesprojetos::find($projeto);
				$cliente_id = $projetoObj->clientes_id;
			}
			$tipoObj = Tarefatipo::find($tipo);

			$tarefa->nome 					= $nome;
			$tarefa->descricao 				= $descricao;
			$tarefa->user_id 				= $responsavel;
			$tarefa->clientes_id 			= $cliente_id;
			$tarefa->clientes_projetos_id 	= $projeto;
			$tarefa->minuto_esforco 		= $tipoObj->minuto_esforco;
			$tarefa->hora_esforco 			= $tipoObj->hora_esforco;
			$tarefa->minutos 				= (($tipoObj->hora_esforco * 60) + $tipoObj->minuto_esforco);
			$tarefa->tarefa_status_id 		= 1;
			$tarefa->tarefa_tipo_id 		= $tipo;
			$tarefa->criado_por 			= Auth::id();
			$tarefa->tarefa_anterior		= $tarefaAnterior;
			$tarefa->tarefa_proximo			= $tarefaProximo;
			$tarefa->status 				= 0;
			$tarefa->data_ini 				= Formatter::dataAtualDB();
			$tarefa->data_fim 				= Formatter::dataAtualDBPlusMinutes($tarefa->minutos);
			$tarefa->save();

			$tarefa->nome = "#".$tarefa->id." - ".$tarefa->nome;
			$tarefa->save();
			$idTarefa = $tarefa->id;

			if(Input::hasFile('files')){
				foreach (Input::file('files') as $key => $img) {
					if(!empty($img)){
						$imginfo = $this->uploadImage($img, 'tarefa/'.$tarefa->id);
						if($imginfo){
							$tarefaanexo = new Tarefaanexo();
							$tarefaanexo->tarefa_id = $tarefa->id;
					        $tarefaanexo->caminho = $imginfo['destinationPath'];
					        $tarefaanexo->nome    = $imginfo['filename'];
					        $tarefaanexo->caminho_completo = $imginfo['destinationPath'].$imginfo['filename'];
					        $tarefaanexo->save();
						}
					}
				}
			}
		} elseif($opcao == "cronograma"){
			$cronogramaObj = Cronograma::find($cronograma);
			$acumuladorMinutos = 0;
			$fezUpload = false;
			$filesArr = array();
			if($cronogramaObj->descricao->count() > 0){
				foreach ($cronogramaObj->descricao as $key => $descricaoCronograma) {

					$tarefa = new Tarefa();
					$cliente_id = 0;
					if(!empty($projeto)){
						$projetoObj = Clientesprojetos::find($projeto);
						$cliente_id = $projetoObj->clientes_id;
					}

					$tarefa->nome 					= $nome;
					$tarefa->descricao 				= $descricao;
					$tarefa->user_id 				= $responsavelCronograma[$cronograma][$descricaoCronograma->id];
					$tarefa->clientes_id 			= $cliente_id;
					$tarefa->clientes_projetos_id 	= $projeto;
					$tarefa->minuto_esforco 		= $descricaoCronograma->minuto_esforco;
					$tarefa->hora_esforco 			= $descricaoCronograma->hora_esforco;
					$tarefa->minutos 				= (($descricaoCronograma->hora_esforco * 60) + $descricaoCronograma->minuto_esforco);
					$tarefa->tarefa_status_id 		= 1;
					$tarefa->tarefa_tipo_id 		= $tipo;
					$tarefa->criado_por 			= Auth::id();
					$tarefa->status 				= 0;
					$tarefa->tarefa_anterior		= $tarefaAnterior;
					$tarefa->tarefa_proximo			= $tarefaProximo;
					$tarefa->data_ini 				= Formatter::dataAtualDBPlusMinutes($acumuladorMinutos);
					$acumuladorMinutos 				= $acumuladorMinutos + $tarefa->minutos;
					$tarefa->data_fim 				= Formatter::dataAtualDBPlusMinutes($acumuladorMinutos);
					$tarefa->save();

					$tarefa->nome = "#".$tarefa->id." - ".$tarefa->nome." - ".$descricaoCronograma->nome;
					$tarefa->descricao = $descricaoCronograma->nome.". ".$tarefa->descricao;
					$tarefa->save();
					if(!empty($tarefaAnterior)){
						$tarefaOld = Tarefa::find($tarefaAnterior);
						$tarefaOld->tarefa_proximo = $tarefa->id;
						$tarefaOld->save();
					}
					$tarefaAnterior = $tarefa->id;
					if(empty($idTarefa)){
						$idTarefa = $tarefa->id;
					}

					if(!$fezUpload && Input::hasFile('files')){
						$fezUpload = true;
						foreach (Input::file('files') as $key => $img) {
							if(!empty($img)){
								$imginfo = $this->uploadImage($img, 'tarefa/'.$tarefa->id);
								if($imginfo){
									$filesArr[$key]["caminho"] = $imginfo['destinationPath'];
									$filesArr[$key]["nome"] = $imginfo['filename'];
									$filesArr[$key]["caminho_completo"] = $imginfo['destinationPath'].$imginfo['filename'];
									$tarefaanexo = new Tarefaanexo();
									$tarefaanexo->tarefa_id = $tarefa->id;
							        $tarefaanexo->caminho = $imginfo['destinationPath'];
							        $tarefaanexo->nome    = $imginfo['filename'];
							        $tarefaanexo->caminho_completo = $imginfo['destinationPath'].$imginfo['filename'];
							        $tarefaanexo->save();
								}
							}
						}
					} elseif (!empty($filesArr)) {
						foreach ($filesArr as $key => $imginfo) {
							$tarefaanexo = new Tarefaanexo();
							$tarefaanexo->tarefa_id = $tarefa->id;
					        $tarefaanexo->caminho = $imginfo['caminho'];
					        $tarefaanexo->nome    = $imginfo['nome'];
					        $tarefaanexo->caminho_completo = $imginfo['caminho_completo'];
					        $tarefaanexo->save();
						}
					}

				}
			} else {
				return Redirect::to('tarefa/create');
			}
		} else {
			return Redirect::to('tarefa/create');
		}
		
		return Redirect::to('tarefa/edit/'.$idTarefa);
	}

	public function postEdittarefa()
	{
		extract(Input::all());
		// dd(Input::all());

		$tarefa = Tarefa::find($id);
		$cliente_id = 0;
		if(!empty($projeto)){
			$projetoObj = Clientesprojetos::find($projeto);
			$cliente_id = $projetoObj->clientes_id;
		}
		$tarefa->nome 					= $nome;
		$tarefa->descricao 				= $descricao;
		$tarefa->user_id 				= $responsavel;
		$tarefa->clientes_id 			= $cliente_id;
		$tarefa->clientes_projetos_id 	= $projeto;
		$tarefa->tarefa_tipo_id 		= $tipo;
		$tarefa->save();

		if(Input::hasFile('files')){
			foreach (Input::file('files') as $key => $img) {
				if(!empty($img)){
					$imginfo = $this->uploadImage($img, 'tarefa/'.$tarefa->id);
					if($imginfo){
						$tarefaanexo = new Tarefaanexo();
						$tarefaanexo->tarefa_id = $tarefa->id;
				        $tarefaanexo->caminho = $imginfo['destinationPath'];
				        $tarefaanexo->nome    = $imginfo['filename'];
				        $tarefaanexo->caminho_completo = $imginfo['destinationPath'].$imginfo['filename'];
				        $tarefaanexo->save();
					}
				}
			}
		}
		return Redirect::to('tarefa/edit/'.$tarefa->id);
	}

	public function postCreatemensagem()
	{
		extract(Input::all());
		$comentario = new Tarefacomentario();
		$comentario->tarefa_id = $id;
		$comentario->user_id = Auth::id();
		$comentario->descricao = $descricao;
		$comentario->save();
		if(Input::hasFile('files')){
			foreach (Input::file('files') as $key => $img) {
				if(!empty($img)){
					$imginfo = $this->uploadImage($img, 'tarefa/'.$id.'/comentario');
					if($imginfo){
						$tarefaanexo = new Tarefacomentarioanexo();
						$tarefaanexo->tarefa_comentario_id = $comentario->id;
				        $tarefaanexo->caminho = $imginfo['destinationPath'];
				        $tarefaanexo->nome    = $imginfo['filename'];
				        $tarefaanexo->caminho_completo = $imginfo['destinationPath'].$imginfo['filename'];
				        $tarefaanexo->save();
					}
				}
			}
		}
		return Redirect::to('tarefa/edit/'.$id);
	}

	public function postPlay()
	{
		extract(Input::all());
		$response = array();
		$response["id_tarefa"] = $id;
		$response["tipo"] = $tipo;
		$response["id_user"] = Auth::id();

		$meutempo = Tarefausertempo::where('user_id','=',Auth::id())->whereNull('data_fim')->first();
		if(!empty($meutempo)){
			$meutempo->data_fim = Formatter::dataAtualDB();
			$meutempo->minutos = Formatter::minutesBetweenDates($meutempo->data_ini,$meutempo->data_fim);
			$meutempo->save();

			$comentario2 = new Tarefacomentario();
			$comentario2->tarefa_id = $meutempo->tarefa_id;
			$comentario2->user_id = Auth::id();
			$url = URL::to('tarefa/edit/'.$id);
			$comentario2->descricao = 'Aviso do sistema: '.Auth::user()->nome.' pausou esta tarefa para iniciar <a href="'.$url.'">esta tarefa</a>';
			$comentario2->save();
		}

		$tarefauser = new Tarefausertempo();
		$tarefauser->tarefa_id = $id;
		$tarefauser->user_id = Auth::id();
		$tarefauser->data_ini = Formatter::dataAtualDB();
		$tarefauser->minutos = 0;
		$tarefauser->save();

		$comentario = new Tarefacomentario();
		$comentario->tarefa_id = $id;
		$comentario->user_id = Auth::id();
		$comentario->descricao = "Aviso do sistema: ".Auth::user()->nome." iniciou esta tarefa";
		$comentario->save();

		echo json_encode($response);
	}

	public function postPause()
	{
		extract(Input::all());
		$response = array();
		$response["id_tarefa"] = $id;
		$response["tipo"] = $tipo;
		$response["id_user"] = Auth::id();

		$tarefauser = Tarefausertempo::where('tarefa_id','=',$id)->OrderBy('id','DESC')->first();
		$tarefauser->data_fim = Formatter::dataAtualDB();
		$tarefauser->minutos = Formatter::minutesBetweenDates($tarefauser->data_ini,$tarefauser->data_fim);
		$tarefauser->save();

		$comentario = new Tarefacomentario();
		$comentario->tarefa_id = $id;
		$comentario->user_id = Auth::id();
		$comentario->descricao = "Aviso do sistema: ".Auth::user()->nome." pausou esta tarefa";
		$comentario->save();

		echo json_encode($response);
	}
}
