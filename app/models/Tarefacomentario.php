<?php
class Tarefacomentario extends Eloquent {

	protected $table = 'tarefa_comentario';

	public function tarefa()
	{
		return $this->belongsTo('Tarefa','tarefa_id');
	}

	public function user()
	{
		return $this->belongsTo('User','user_id');
	}

	public function anexos()
	{
		return $this->hasMany('Tarefacomentarioanexo','tarefa_comentario_id')->OrderBy('created_at','DESC');
	}
}