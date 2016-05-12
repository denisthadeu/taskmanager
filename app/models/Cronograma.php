<?php
class Cronograma extends Eloquent {

	protected $table = 'cronograma';
	

	public function descricao()
	{
		return $this->hasMany('Cronogramadescricao')->OrderBy('order');
	}
}