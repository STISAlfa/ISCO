<?php

class AdminController extends Controller {
	public function showDashboard(){
		return View::make('admin/dashboard');
	}
	public function getCurrentTime(){
		$mytime = Carbon\Carbon::now();
		return $mytime->toDateTimeString();
	}

	public function showMaintenance(){
		return View::make('layout/maintenance');
	}

	public function emailReminder(){
		$users = User::where('status','=','1')->get();
		
		foreach($users as $user){
			$view_data = array(
                'nama' => $user->username
            );
			Mail::send('emails.remindercontest', $view_data, function($message) use ($user){
	            $message->to($user->email, $user->username)
	                    ->subject('ISCO 2015 | Penyisihan Statistician Game');
	        });
		}
		
		/*
		$user = User::find(1);
		$view_data = array(
                'nama' => $user->username
            );
			Mail::send('emails.remindercontest', $view_data, function($message) use ($user){
	            $message->to($user->email, $user->username)
	                    ->subject('ISCO 2015 | Penyisihan Statistician Game');
	        });
		*/
	}

}