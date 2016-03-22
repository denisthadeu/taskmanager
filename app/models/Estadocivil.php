<?php
class Estadocivil extends Eloquent {

	protected $table = 'estadocivil';
	

	public function user()
	{
		return $this->hasMany('User');
	}
}