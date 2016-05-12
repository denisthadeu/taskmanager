<?php
class Clientes extends Eloquent {

	protected $table = 'clientes';
	

	public function clientesprojetos()
	{
		return $this->hasMany('Clientesprojetos');
	}

	public function tarefas()
	{
		return $this->hasMany('Tarefa','clientes_id');
	}

	public function equipecliente()
	{
		return $this->hasMany('Equipecliente','cliente_id');
	}

	public function equipeclienteId($equipe_id)
	{
		$a = $this->hasMany('Equipecliente','cliente_id')->where('equipe_id','=',$equipe_id)->first();
		if(!empty($a)){
			return true;
		} else {
			return false;
		}
	}
}