<?php
class Equipe extends Eloquent {

	protected $table = 'equipe';
	

	public function equipe_user()
	{
		return $this->hasMany('Equipeuser');
	}
}