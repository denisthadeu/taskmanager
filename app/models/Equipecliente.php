<?php
class Equipecliente extends Eloquent {

	protected $table = 'equipe_clientes';

	public function equipe()
	{
		return $this->belongsTo('Equipe');
	}

	public function cliente()
	{
		// return $this->belongsTo('User');
		return $this->belongsTo('Clientes','cliente_id');
	}
}