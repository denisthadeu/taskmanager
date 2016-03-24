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
		$titulo = "Caixa de Entrada";
		$mensagens = Mensagem::where('destinatario_id','=',Auth::id())->OrderBy('created_at','DESC')->get();
		return View::make('mensagem.list',compact('mensagens','titulo'));
	}

	public function getOut()
	{
		$titulo = "Caixa de Saída";
		$mensagens = Mensagem::where('remetente_id','=',Auth::id())->OrderBy('created_at','DESC')->get();
		return View::make('mensagem.list',compact('mensagens','titulo'));
	}

	public function getMensagem($id)
	{
		$mensagem = Mensagem::where('id','=',$id)->with('destinatario')->with('remetente')->first();
		$mensagemAtualiza = Mensagem::find($id);
		$mensagemAtualiza->status = 0;
		$mensagemAtualiza->save();
		return View::make('mensagem.mensagem',compact('mensagem'));
	}

	public function getResponder($id)
	{
		$mensagem = Mensagem::where('id','=',$id)->get();
		$users = User::OrderBy('nome')->get();
		return View::make('mensagem.form',compact('mensagem','users'));
	}

	public function getCreate()
	{
		$users = User::OrderBy('nome')->get();
		return View::make('mensagem.form',compact('users'));
	}

	public function postSave()
	{
		extract(Input::all());
		
		$mensagemObj = new Mensagem();
		$mensagemObj->destinatario_id = $user;
		$mensagemObj->remetente_id = Auth::id();
		$mensagemObj->assunto = $assunto;
		$mensagemObj->mensagem = $mensagem;
		$mensagemObj->status = 1;
		$mensagemObj->save();

		return Redirect::to('mensagem/in');
	}

	public function getDelete($id)
	{
		$Mensagem = Mensagem::where('id','=',$id)->delete();
		return Redirect::to('mensagem/in');
	}	

}
