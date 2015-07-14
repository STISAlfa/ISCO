<?php

class Paper_Member extends Eloquent {
	protected $table  = "paper_member";
	public function team(){
		return $this->belongsTo('Paper_Team','team_id');
	}
}