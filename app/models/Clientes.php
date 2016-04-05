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
}