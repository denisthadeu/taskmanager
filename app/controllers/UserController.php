<?php

class UserController extends BaseController {

	public function getIndex()
	{
		return View::make('id.index');
	}

	public function getCreate()
	{
		return View::make('user.form');
	}

	public function getEdit($id)
	{
		$user = User::find($id);
		return View::make('user.form',compact('user'));
	}

	public function getList()
	{
		$users = User::OrderBy('nome')->get();
		return View::make('user.list',compact('users'));
	}

	public function getDelete($id)
	{
		$user = User::find($id);
		$user->status = 0;
		$user->deleted_at = Formatter::dataAtualDB();
		$user->save();
		return Redirect::to('user/list');
	}

	public function postSave(){
		extract(Input::all());
		dd(Input::all());
		if(empty($id)){
			$user = new User();
			$msg = "Usuário Cadastrado";
		} else {
			$user = Clientes::find($id);
			$msg = "Usuário Alterado";
		}
		return Redirect::to('user/edit/'.$user->id)->with('success',$msg);
	}
}
