<?php

class Anggota extends Eloquent {
	protected $table  = "anggota";

	public function User()
    {
        return $this->belongsTo('User','user_id');
    }
    public function cekLengkap(){
    	foreach($this as $s){
    		if($s==null) return false;
    	}
    	return true;
    }
}