<?php
class Tarefa extends Eloquent {

	protected $table = 'tarefa';

	public function tipo()
	{
		return $this->belongsTo('Tarefatipo','tarefa_tipo_id');
	}

	public function projeto()
	{
		return $this->belongsTo('Clientesprojetos','clientes_projetos_id');
	}

	public function cliente()
	{
		return $this->belongsTo('Clientes','clientes_id');
	}

	public function statustarefa()
	{
		return $this->belongsTo('Tarefastatus','tarefa_status_id');
	}

	public function responsavel()
	{
		return $this->belongsTo('User','user_id');
	}

	public function criadopor()
	{
		return $this->belongsTo('User','criado_por');
	}

	public function anexos()
	{
		return $this->hasMany('Tarefaanexo','tarefa_id');
	}

	public function comentarios()
	{
		return $this->hasMany('Tarefacomentario','tarefa_id');
	}

	public function usertempo()
	{
		return $this->hasMany('Tarefausertempo','tarefa_id');
	}


}