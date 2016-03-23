<?php
class Equipe extends Eloquent {

	protected $table = 'equipe';
	

	public function equipeUser()
	{
		return $this->hasMany('Equipeuser');
	}

	public function responsavel()
	{
		return $this->belongsTo('User','user_id');
	}
}