<?php
class Clientes extends Eloquent {

	protected $table = 'clientes';
	

	public function clientesprojetos()
	{
		return $this->hasMany('Clientesprojetos');
	}
}