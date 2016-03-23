<?php
class Mensagem extends Eloquent {

	protected $table = 'mensagem';

	public function destinatario()
	{
		return $this->belongsTo('User','destinatario_id');
	}

	public function remetente()
	{
		return $this->belongsTo('User','remetente_id');
	}
}