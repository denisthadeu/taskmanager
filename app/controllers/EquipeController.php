<?php

class EquipeController extends BaseController {

	public function getIndex()
	{
		return View::make('id.index');
	}

	public function getCreate()
	{
		return View::make('equipe.form');
	}

	public function getEdit($id)
	{
		$equipe = Equipe::find($id);//->with('equipesprojetos')
		return View::make('equipe.form',compact('equipe'));
	}	

	public function getDelete($id)
	{
		$equipe = Equipe::where('id','=',$id)->delete();
		$deletedProjetos = Equipeuser::where('equipes_id','=',$id)->delete();
		return Redirect::to('equipe/list');
	}	

	public function postSave(){
		extract(Input::all());
		dd(Input::all());
		if(empty($id)){
			$equipe = new Equipe();
			$msg = "equipe Alterado";
		} else {
			$equipe = Equipe::find($id);
			$msg = "equipe Cadastrado";
		}
		$equipe->nome = $nome;
		$equipe->save();
		$arrIDSProjetos = array();
		if(isset($projetoID) && !empty($projetoID)){
			foreach ($projetoID as $key => $idProjeto) {
				if(empty($idProjeto)){
					$projeto = new Equipeuser();
				} else {
					$projeto = Equipeuser::find($idProjeto);
				}

				$projeto->nome = $projetoNome[$key];
				$projeto->equipes_id = $equipe->id;
				$projeto->save();
				$arrIDSProjetos[] = $projeto->id;

			}
		}
		return Redirect::to('equipe/edit/'.$equipe->id)->with('success',$msg);
	}

	public function getList()
	{
		$equipes = Equipe::OrderBy('nome')->with('equipesprojetos')->get();
		return View::make('equipe.list',compact('equipes'));
	}
}
