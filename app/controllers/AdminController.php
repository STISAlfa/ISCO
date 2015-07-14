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

}