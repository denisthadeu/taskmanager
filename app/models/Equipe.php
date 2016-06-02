<?php
class Equipe extends Eloquent {

	protected $table = 'equipe';
	

	public function equipeUser()
	{
		return $this->hasMany('Equipeuser')->with(['user' => function($query)
					{
					    $query->OrderBy('nome');
					}]);
	}

	public function equipeCliente()
	{
		return $this->hasMany('Equipecliente');
	}

	public function equipeClienteId($id_cliente)
	{
		$a = $this->hasMany('Equipecliente')->where('cliente_id','=',$id_cliente)->first();
		if(!empty($a)){
			return true;
		} else {
			return false;
		}
	}

	public function equipeUserId($id_user)
	{
		$a = $this->hasMany('Equipeuser')->where('user_id','=',$id_user)->first();
		if(!empty($a)){
			return true;
		} else {
			return false;
		}
	}

	public function responsavel()
	{
		return $this->belongsTo('User','user_id');
	}
}