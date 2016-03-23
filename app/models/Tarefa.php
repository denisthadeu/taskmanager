<?php
class Tarefa extends Eloquent {

	protected $table = 'tarefa';

	public function tipo()
	{
		return $this->belongsTo('Tarefatipo','tarefa_tipo_id');
	}
}