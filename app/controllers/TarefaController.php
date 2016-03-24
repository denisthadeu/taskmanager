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
								->whereNotIn('tarefa_status_id',array(Auth::id()))
								->with('cliente')
								->with('projeto')
								->with('status')
								->get();
		$tarefasCriadas = Tarefa::where('user_id','=',Auth::id())
								->whereNotIn('tarefa_status_id',array(Auth::id()))
								->with('cliente')
								->with('projeto')
								->with('status')
								->with('responsavel')
								->get();
		$minhasTarefasEntregues = Tarefa::where('user_id','=',Auth::id())
								->whereNotIn('tarefa_status_id',array(Auth::id()))
								->with('cliente')
								->with('projeto')
								->with('status')
								->get();
		$tarefasCriadasEntregues = Tarefa::where('user_id','=',Auth::id())
								->whereNotIn('tarefa_status_id',array(Auth::id()))
								->with('cliente')
								->with('projeto')
								->with('status')
								->with('responsavel')
								->get();
		return View::make('tarefa.list',compact('minhasTarefas','tarefasCriadas','minhasTarefasEntregues','tarefasCriadasEntregues','search'));
	}

	public function getCreate()
	{
		$users = User::OrderBy('nome')->get();
		$tarefaTipos = Tarefatipo::OrderBy('nome')->get();
		$clientes = Clientes::with('clientesprojetos')->OrderBy('nome')->get();
		return View::make('tarefa.form',compact('users','tarefaTipos','clientes'));
	}

	public function getEdit($id)
	{
		$tarefa = Tarefa::find($id);
		$users = User::OrderBy('nome')->get();
		$tarefaTipos = Tarefatipo::OrderBy('nome')->get();
		$clientes = Clientes::with('clientesprojetos')->OrderBy('nome')->get();
		return View::make('tarefa.form',compact('tarefa','users','tarefaTipos','clientes'));
	}

	public function getDelete($id)
	{
		$tarefa = Tarefa::where('id','=',$id)->delete();
		return Redirect::to('tarefa/list');
	}

	public function postSavetarefa()
	{
		extract(Input::all());
		dd('precisa terminar os campos salvos');
		if(!empty($id)){
			$tarefa = Tarefa::find($id);
		} else {
			$tarefa = new Tarefa();
		}
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
		$tarefa->minuto_esforco 		= 
		$tarefa->hora_esforco 			= 
		$tarefa->minutos 				= 
		$tarefa->tarefa_status_id 		= 1;
		$tarefa->tarefa_tipo_id 		= $tipo;
		$tarefa->criado_por 			= Auth::id();
		$tarefa->status 				= 0;
		$tarefa->data_ini 				= 
		$tarefa->data_fim 				= 
		$tarefa->save();
		return Redirect::to('tarefa/edit/'.$tarefa->id);
	}

}
