<?php
class Cronogramadescricao extends Eloquent {

	protected $table = 'cronograma_descricao';

	public function cronograma()
	{
		return $this->belongsTo('Cronograma');
	}
}