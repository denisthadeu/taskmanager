<?php

class EquipeController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('auth');
  	}
  	
	public function getIndex()
	{
		return View::make('id.index');
	}

	public function getCreate()
	{
		$users = User::OrderBy('nome')->get();
		$clientes = Clientes::with('equipeCliente')->OrderBy('nome')->get();
		return View::make('equipe.form',compact('users','clientes'));
	}

	public function getEdit($id)
	{
		$equipe = Equipe::where('id','=',$id)->with(['equipeUser' => function($query)
			{
			    $query->with('user');
			}])->first();//->with('equipesprojetos');
		$users = User::OrderBy('nome')->get();
		$clientes = Clientes::with('equipeCliente')->OrderBy('nome')->get();
		return View::make('equipe.form',compact('equipe','users','clientes'));
	}	

	public function getDelete($id)
	{
		$equipe = Equipe::where('id','=',$id)->delete();
		$Equipeuser = Equipeuser::where('equipe_id','=',$id)->delete();
		return Redirect::to('equipe/list');
	}	

	public function postSave(){
		extract(Input::all());
		// dd(Input::all());
		if(empty($id)){
			$equipe = new Equipe();
			$msg = "Equipe Alterado";
		} else {
			$equipe = Equipe::find($id);
			$msg = "Equipe Cadastrado";
		}
		$equipe->nome = $nome;
		$equipe->save();
		$arrIDSEquipes = array();
		if(isset($membroID) && !empty($membroID)){
			foreach ($membroID as $key => $idMembro) {
				if(empty($idMembro)){
					$equipeuser = new Equipeuser();
				} else {
					$equipeuser = Equipeuser::find($idMembro);
				}

				$equipeuser->user_id = $userID[$key];
				$equipeuser->equipe_id = $equipe->id;
				$equipeuser->save();
				$arrIDSEquipes[] = $equipeuser->id;

			}
		}
		$deletedEquipeUser = Equipeuser::where('equipe_id','=',$equipe->id)->whereNotIn('id', $arrIDSEquipes)->delete();
		$arrIDSClientes = array();
		if(!empty($clientes) && is_array($clientes)){
			foreach($clientes AS $cliente){
				$arrIDSClientes[] = $cliente;
				$equipeClientes = Equipecliente::where('equipe_id','=',$equipe->id)->where('cliente_id','=', $cliente)->first();
				if(empty($equipeClientes)){
					$equipeCliente = new Equipecliente();
					$equipeCliente->cliente_id = $cliente;
					$equipeCliente->equipe_id = $equipe->id;
					$equipeCliente->save();
				}
			}
		}
		$deletedEquipeClientes = Equipecliente::where('equipe_id','=',$equipe->id)->whereNotIn('cliente_id', $arrIDSClientes)->delete();
		return Redirect::to('equipe/edit/'.$equipe->id)->with('success',$msg);
	}

	public function getList()
	{
		$equipes = Equipe::OrderBy('nome')->with(['equipeUser' => function($query)
			{
			    $query->with('user');
			}])->get();
		return View::make('equipe.list',compact('equipes'));
	}

	public function getMarcarresponsavel($id)
	{
		$equipeuser = Equipeuser::find($id);
		$equipeuser->responsavel = 1;
		$equipeuser->save();
		return Redirect::to('equipe/edit/'.$equipeuser->equipe_id)->with('success',$equipeuser->user->nome." marcado(a) como Responsável");
	}

	public function getRemoverresponsavel($id)
	{
		$equipeuser = Equipeuser::find($id);
		$equipeuser->responsavel = 0;
		$equipeuser->save();
		return Redirect::to('equipe/edit/'.$equipeuser->equipe_id)->with('success',$equipeuser->user->nome." removido(a) como Responsável");
	}
}
