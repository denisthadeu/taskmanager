<?php
class Equipeuser extends Eloquent {

	protected $table = 'equipe_user';

	public function equipe()
	{
		return $this->belongsTo('Equipe')->OrderBy('nome');
	}

	public function user()
	{
		// return $this->belongsTo('User');
		return $this->belongsTo('User','user_id')->OrderBy('nome');
	}
}