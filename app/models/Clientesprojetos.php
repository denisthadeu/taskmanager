<?php
class Clientesprojetos extends Eloquent {

	protected $table = 'clientes_projetos';

	public function clientes()
	{
		return $this->belongsTo('Clientes');
	}
}