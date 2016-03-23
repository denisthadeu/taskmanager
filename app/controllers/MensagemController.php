<?php

class MensagemController extends BaseController {

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
	public function getIndex()
	{
		return View::make('id.index');//->with('menu', $menu);
	}

	public function getIn()
	{
		$mensagens = Mensagem::where('destinatario_id','=',Auth::id())->OrderBy('created_at','DESC')->get();
		return View::make('mensagem.list',compact('mensagens'));
	}

	public function getOut()
	{
		$mensagens = Mensagem::where('remetente_id','=',Auth::id())->OrderBy('created_at','DESC')->get();
		return View::make('mensagem.list',compact('mensagens'));
	}

	public function getMensagem($id)
	{
		$mensagem = Mensagem::where('id','=',$id)->get();
		return View::make('mensagem.mensagem',compact('mensagem'));
	}

	public function getResponder($id)
	{
		$mensagem = Mensagem::where('id','=',$id)->get();
		return View::make('mensagem.form',compact('mensagem'));
	}

	public function getCreate()
	{
		return View::make('mensagem.form');
	}

	public function postSave()
	{
		return View::make('mensagem.form');
	}

}
