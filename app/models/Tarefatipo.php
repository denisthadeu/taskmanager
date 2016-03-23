<?php
class Tarefatipo extends Eloquent {

	protected $table = 'tarefa_tipo';

	public function tarefas()
	{
		return $this->hasMany('Tarefa');
	}
}