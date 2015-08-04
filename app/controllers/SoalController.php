<?php

class SoalController extends Controller {

    public function getDashboard(){
    	return View::make('admin/soal/index');
    }

    public function showSoal(){
    	$ans = Answer::orderBy('id')->get();
    	$data = Soal::orderBy('no')->get();
    	return View::make('user/soal')->with('data',$data)->with('ans',$ans);
    }
}
    