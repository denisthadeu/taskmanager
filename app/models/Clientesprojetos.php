<?php
class Clientesprojetos extends Eloquent {

	protected $table = 'clientes_projetos';

	public function clientes()
	{
		return $this->belongsTo('Clientes');
	}

	public function tarefas()
	{
		return $this->hasMany('Tarefa','clientes_projetos_id');
	}
}