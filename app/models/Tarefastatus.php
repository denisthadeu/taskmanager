<?php
class Tarefastatus extends Eloquent {

	protected $table = 'tarefa_status';

	public function tarefas()
	{
		return $this->hasMany('Tarefa','tarefa_status_id');
	}
}