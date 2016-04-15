<?php

class UserController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('auth');
  	}
  	
	public function getIndex()
	{
		return View::make('id.index');
	}

	public function getCreate()
	{
		$estadocivil = Estadocivil::OrderBy('nome')->get();
		return View::make('user.form',compact('estadocivil'));
	}

	public function getEdit($id)
	{
		$user = User::find($id);
		$estadocivil = Estadocivil::OrderBy('nome')->get();
		return View::make('user.form',compact('user','estadocivil'));
	}

	public function getList()
	{
		$users = User::whereNull('deleted_at')->OrderBy('nome')->get();
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
		// dd(Input::all());
		$enviarEmail = false;
		if(empty($id)){
			$user = new User();
			$msg = "Usuário Cadastrado";
			$enviarEmail = true;
		} else {
			$user = User::find($id);
			$msg = "Usuário Alterado";
		}
		//salva dados do usuario
		$user->nome = $nome;
		$user->sobrenome = $sobrenome;
		$user->email = $email;
		$user->telefone = $telefone;
		$user->celular = $celular;
		$user->cpf = $cpf;
		$user->sexo = $sexo;
		$user->data_nascimento = $data_nascimento;
		$user->estadocivil_id = $estado_civil_;
		$user->cargo = $cargo;
		if(isset($perfil)){
			$user->perfil = 1;
		} elseif(Auth::user()->perfil == 1 || empty($user->perfil)){
			$user->perfil = 2;
		}
		
		$user->status = 1;
		if(isset($senha) && isset($senha_confirma) && !empty($senha_confirma) && !empty($senha) && $senha_confirma == $senha){
			$user->password = Hash::make($senha);
		} elseif($enviarEmail){
			$senha = Formatter::generateStrongPassword();
			$user->password = Hash::make($senha);
		}
		$user->save();

		// salva a imagem(caso tenha sido feito upload)
		if(Input::hasFile('foto')){
			if(!empty($user->foto_caminho_completo)){
				File::delete($user->foto_caminho_completo);
			}
			$img = Input::file('foto');
			$imginfo = $this->uploadImage($img, 'usuarios/'.$user->id);
			if($imginfo){
		        $user->foto_nome = $imginfo['destinationPath'];
		        $user->foto_caminho    = $imginfo['filename'];
		        $user->foto_caminho_completo = $imginfo['destinationPath'].$imginfo['filename'];
		        $user->save();

		        $image = Image::make($user->foto_caminho_completo)->resize(100, 100);
		        $image->save($user->foto_caminho_completo);

			}
		}

		if($enviarEmail){
			$arr = array();
			$arr["nome"] = $user->nome;
			$arr["senha"] = $senha;
			$arr["email"] = $email;
			Mail::send('emails.welcome', $arr, function($message) use($arr)
			{
			    $message->to($arr["email"], $arr["nome"])->subject('Bem-vindo!');
			});
		}

		return Redirect::to('user/edit/'.$user->id)->with('success',$msg);
	}
}
