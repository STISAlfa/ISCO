<?php

class RegistrationController extends Controller {
	public function getEmail(){
		$email = User::where('email','=',Input::get('email'))->first();
		if($email!=null) return false;
		else return true;
	}

	public function getUsername(){
		$username = User::where('username','=',Input::get('username'))->first();
		if($username!=null) return false;
		else return true;
	}
}