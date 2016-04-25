<?php

class ClienteController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('auth');
  	}
  	
  	
	public function getIndex()
	{
		return View::make('id.index');
	}

	public function getCreate()
	{
		$equipes = Equipe::OrderBy('nome')->get();
		return View::make('cliente.form',compact('equipes'));
	}

	public function getEdit($id)
	{
		$cliente = Clientes::find($id);
		$equipes = Equipe::OrderBy('nome')->get();
		return View::make('cliente.form',compact('cliente','equipes'));
	}	

	public function getDelete($id)
	{
		$cliente = Clientes::where('id','=',$id)->delete();
		$deletedProjetos = Clientesprojetos::where('clientes_id','=',$id)->delete();
		return Redirect::to('cliente/list');
	}	

	public function postSave(){
		extract(Input::all());

		if(empty($id)){
			$cliente = new Clientes();
			$msg = "cliente Alterado";
		} else {
			$cliente = Clientes::find($id);
			$msg = "cliente Cadastrado";
		}
		$cliente->nome = $nome;
		$cliente->save();
		$arrIDSProjetos = array();
		if(isset($projetoID) && !empty($projetoID)){
			foreach ($projetoID as $key => $idProjeto) {
				if(empty($idProjeto)){
					$projeto = new Clientesprojetos();
				} else {
					$projeto = Clientesprojetos::find($idProjeto);
				}

				$projeto->nome = $projetoNome[$key];
				$projeto->clientes_id = $cliente->id;
				$projeto->save();
				$arrIDSProjetos[] = $projeto->id;

			}
		}
		$deletedProjetos = Clientesprojetos::where('clientes_id','=',$cliente->id)->whereNotIn('id', $arrIDSProjetos)->delete();

		$deletedEquipeClientes = Equipecliente::where('cliente_id','=',$cliente->id)->delete();
		foreach($equipes AS $equipe){
			$equipeCliente = new Equipecliente();
			$equipeCliente->cliente_id = $cliente->id;
			$equipeCliente->equipe_id = $equipe;
			$equipeCliente->save();
		}

		return Redirect::to('cliente/edit/'.$cliente->id)->with('success',$msg);
	}

	public function getList()
	{
		$clientes = Clientes::OrderBy('nome')->with('clientesprojetos')->get();
		return View::make('cliente.list',compact('clientes'));
	}
}
