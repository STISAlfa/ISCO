<?php

class SoalController extends Controller {

    public function getDashboard(){
    	return View::make('admin/soal/index');
    }

    public function showSoal(){
    	$data = Soal::orderBy('no')->get();
    	return View::make('user/soal')->with('data',$data);
    }
}
    