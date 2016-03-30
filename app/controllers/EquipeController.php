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
		return View::make('equipe.form',compact('users'));
	}

	public function getEdit($id)
	{
		$equipe = Equipe::find($id);//->with('equipesprojetos');
		$users = User::OrderBy('nome')->get();
		return View::make('equipe.form',compact('equipe','users'));
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
		$equipe->user_id = $responsavel;
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
		return Redirect::to('equipe/edit/'.$equipe->id)->with('success',$msg);
	}

	public function getList()
	{
		$equipes = Equipe::OrderBy('nome')->with('Equipeuser')->with('responsavel')->get();
		return View::make('equipe.list',compact('equipes'));
	}
}
