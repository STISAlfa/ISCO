<?php

class Paper_Team extends Eloquent {
	protected $table  = "paper_team";

	public function member(){
		return $this->hasMany('Paper_Member','team_id');
	}
}