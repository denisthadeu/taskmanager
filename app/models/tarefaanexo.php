<?php
class Tarefaanexo extends Eloquent {

	protected $table = 'tarefa_anexo';

	public function tarefa()
	{
		return $this->belongsTo('Tarefa','tarefa_id');
	}
}