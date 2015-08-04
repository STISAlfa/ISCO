<?php

class KontesController extends Controller {

	public function __construct()
    {
        // Perform CSRF check on all post/put/patch/delete requests
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
    }




	public function getKontes($idKontes){
		$ans = Answer::orderBy('id')->get();
    	$data = Soal::orderBy('no')->get();
    	
    	return View::make('user/soal')->with('data',$data)->with('ans',$ans);
     
	}
	 

	public function postKontes($idKontes){

	}
}