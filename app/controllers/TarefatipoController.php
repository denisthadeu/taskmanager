<?php

class TarefatipoController extends BaseController {

	public function getIndex()
	{
		return View::make('id.index');
	}

	public function getCreate()
	{
		return View::make('tarefa.tipo.form');
	}

	public function getEdit($id)
	{
		$tarefatipo = Tarefatipo::find($id);
		return View::make('tarefa.tipo.form',compact('tarefatipo'));
	}	

	public function getDelete($id)
	{
		$tarefatipo = Tarefatipo::where('id','=',$id)->delete();
		return Redirect::to('tarefatipo/list');
	}	

	public function postSave(){
		extract(Input::all());
		if(empty($id)){
			$tarefatipo = new Tarefatipo();
			$msg = "Tipo de tarefa Alterado";
		} else {
			$tarefatipo = Tarefatipo::find($id);
			$msg = "Tipo de tarefa Cadastrado";
		}
		$tarefatipo->nome = $nome;
		$tarefatipo->hora_esforco = $hora;
		$tarefatipo->minuto_esforco = $minuto;
		$tarefatipo->save();
		return Redirect::to('tarefatipo/edit/'.$tarefatipo->id)->with('success',$msg);
	}

	public function getList()
	{
		$tarefatipos = Tarefatipo::OrderBy('nome')->get();
		return View::make('tarefa.tipo.list',compact('tarefatipos'));
	}
}
