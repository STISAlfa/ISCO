<?php

class Roles extends Eloquent {
	protected $table  = "roles";
	public function user(){
		return 	$this->hasMany('User','roles_id');
	}
}