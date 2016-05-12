<?php
class Tarefausertempo extends Eloquent {

	protected $table = 'tarefa_user_tempo';

	public function tarefa()
	{
		return $this->belongsTo('Tarefa','tarefa_id');
	}

	public function user()
	{
		// return $this->belongsTo('User');
		return $this->belongsTo('User','user_id');
	}
}