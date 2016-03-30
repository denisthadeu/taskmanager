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
	public function __construct() {
	    $this->beforeFilter('auth');
  	}
  	
  	
	public function getIndex()
	{
		return View::make('id.index');//->with('menu', $menu);
	}

	public function getIn()
	{
		$titulo = "Caixa de Entrada";
		$mensagens = Mensagem::where('destinatario_id','=',Auth::id())->with('remetente')->OrderBy('created_at','DESC')->get();
		return View::make('mensagem.list',compact('mensagens','titulo'));
	}

	public function getOut()
	{
		$titulo = "Caixa de Saída";
		$mensagens = Mensagem::where('remetente_id','=',Auth::id())->with('destinatario')->OrderBy('created_at','DESC')->get();
		return View::make('mensagem.list',compact('mensagens','titulo'));
	}

	public function getMensagem($id)
	{
		$mensagem = Mensagem::where('id','=',$id)->with('destinatario')->first();
		$mensagemAtualiza = Mensagem::find($id);
		if($mensagemAtualiza->destinatario_id == Auth::id()){
			$mensagemAtualiza->status = 0;
			$mensagemAtualiza->save();
		}
		return View::make('mensagem.mensagem',compact('mensagem'));
	}

	public function getResponder($id)
	{
		$mensagem = Mensagem::where('id','=',$id)->first();
		$users = User::OrderBy('nome')->whereNotIn('id',array(Auth::id()))->get();
		return View::make('mensagem.form',compact('mensagem','users'));
	}

	public function getCreate()
	{
		$users = User::OrderBy('nome')->whereNotIn('id',array(Auth::id()))->get();
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

	public function postAjaxmensagem()
	{
		$mensagens = Mensagem::where('destinatario_id','=',Auth::id())->whereNotIn('status',array(0))->with('remetente')->OrderBy('created_at','DESC')->get();
		$response = array();
		$response["total"] = $mensagens->count();
		$response["resultados"] = '';
		$response["alerta"] = false;
		foreach ($mensagens as $key => $mensagem) {
			$response["resultados"][$key]["usernome"] = $mensagem->remetente->nome;
			$response["resultados"][$key]["mensagemassunto"] = $mensagem->assunto;
			$response["resultados"][$key]["url"] = URL::to('mensagem/mensagem/'.$mensagem->id);
			$response["resultados"][$key]["userfoto"] = $mensagem->remetente->foto_caminho_completo;
			if($mensagem->status == 2){
				$mensagem->status = 1;
				$mensagem->save();
				$response["alerta"] = true;
			}
		}
		echo json_encode($response);
	}

}
