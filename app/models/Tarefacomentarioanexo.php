<?php
class Tarefacomentarioanexo extends Eloquent {

	protected $table = 'tarefa_comentario_anexo';


	public function tarefacomentario()
	{
		return $this->belongsTo('Tarefacomentario','tarefa_comentario_id');
	}
}