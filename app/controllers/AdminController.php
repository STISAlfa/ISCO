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
		//$users = User::where('status','=','1')->get();
		$users = DB::select(DB::raw("SELECT *
From user
where user.status = '1' and user.id not in(
	SELECT user.id
	From user
	Inner join result
	on user.id = result.user_id
    where result.kontes_id='2'
)"));
		$i=0;
		foreach($users as $user){
			echo $i++;
			echo "<p>".$user->username."</p><br>";
			
			$view_data = array(
                'nama' => $user->username
            );
			Mail::send('emails.remindercontest', $view_data, function($message) use ($user){
	            $message->to($user->email, $user->username)
	                    ->subject('ISCO 2015 | Penyisihan Statistician Game - Hari Kedua');
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