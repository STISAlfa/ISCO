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
	protected $hidden = array('password', 'remember_token','confirmation_code');

	public function registered($kontesId){
		$akses = Kontes_Enrole::where('user_id','=',$this->id)->where('kontes_id','=',$kontesId)->get();
		if(count($akses)>0){
			return true;
		}
		else return false;
	}

	public function role()
    {
        return $this->belongsTo('Roles','roles_id');
    }

    public function anggota()
    {
        return $this->hasMany('anggota','user_id');
    }

    public function skor()
    {
        return $this->belongsTo('result','user_id');
    }

	public function isAdmin(){
		return $this->role->name === 'admin';	
	}
	 
}
