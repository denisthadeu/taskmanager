<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function equipeUser()
	{
		return $this->hasMany('Equipeuser');
	}

	public function estadocivil()
	{
		return $this->belongsTo('Estadocivil');
	}

	public function equipeUserResponsavel()
	{
		return $this->hasMany('Equipe');
	}

	public function mensagemRemetente()
	{
		return $this->hasMany('Mensagem','remetente_id');
	}

	public function mensagemDestinatario()
	{
		return $this->hasMany('Mensagem','destinatario_id');
	}

}
