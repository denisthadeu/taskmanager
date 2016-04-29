<?php

class CronogramaController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('auth');
  	}
  	
	public function getIndex()
	{
		return View::make('id.index');
	}

	public function getCreate()
	{
		return View::make('tarefa.cronograma.form');
	}

	public function getEdit($id)
	{
		$cronograma = Cronograma::with('descricao')->where('id','=',$id)->first();
		// $cronograma = Cronograma::find($id);
		return View::make('tarefa.cronograma.form',compact('cronograma'));
	}	

	public function getDelete($id)
	{
		$cronograma = Cronograma::where('id','=',$id)->delete();
		$cronogramaDescricao = Cronogramadescricao::where('cronograma_id','=',$id)->delete();
		return Redirect::to('cronograma/list');
	}	

	public function postSave(){
		extract(Input::all());
		if(empty($id)){
			$cronograma = new Cronograma();
			$msg = "Cronograma Alterado";
		} else {
			$cronograma = Cronograma::find($id);
			$msg = "Cronograma Cadastrado";
		}
		$cronograma->nome = $nome;
		$cronograma->save();
		$arrIDSCronogramasDescricao = array();
		if(isset($etapasID) && !empty($etapasID)){
			foreach ($etapasID as $key => $idEtapas) {
				if(empty($idEtapas)){
					$cronogramadescricao = new Cronogramadescricao();
				} else {
					$cronogramadescricao = Cronogramadescricao::find($idEtapas);
				}
				$cronogramadescricao->nome = $etapaNome[$key];
				$cronogramadescricao->hora_esforco = $etapaHora[$key];
				$cronogramadescricao->minuto_esforco = $etapaMinuto[$key];
				$cronogramadescricao->duracao = $etapaDuracao[$key];
				$cronogramadescricao->cronograma_id = $cronograma->id;
				$cronogramadescricao->order = $key;
				$cronogramadescricao->save();
				$arrIDSCronogramasDescricao[] = $cronogramadescricao->id;

			}
		}
		$deletedCronogramaDescricao = Cronogramadescricao::where('cronograma_id','=',$cronograma->id)->whereNotIn('id', $arrIDSCronogramasDescricao)->delete();
		return Redirect::to('cronograma/edit/'.$cronograma->id)->with('success',$msg);
	}

	public function getList()
	{
		$cronogramas = Cronograma::OrderBy('nome')->with('descricao')->get();
		return View::make('tarefa.cronograma.list',compact('cronogramas'));
	}
}
