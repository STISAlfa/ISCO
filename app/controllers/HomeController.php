<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function __construct()
    {
        // Perform CSRF check on all post/put/patch/delete requests
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
    }

	public function cekPembayaran(){
		return $auth::user()->status_pembayaran==1;
	}

	public function cekAnggota($anggota){
		
	}

	public function cekSemuaAnggota(){
		$anggotas = Auth::user()->anggota;
		foreach($anggotas as $anggota){
			
		}
	}

	public function cekKelengkapan($data){
		return true;
	}

	public function showProfile()
	{
		$dataKontes = array();
		$data = Auth::user()->anggota()->orderBy('urutan')->get();
		$KontCount = Kontes::all()->count();
		$j = 0;
		for ($i=0; $i <$KontCount; $i++) { 
			if (Auth::user()->registered($i) ) {
				$dataKon = Kontes::find($i);
				if(strtotime($dataKon->endtime) > strtotime("now"))
					$dataKontes[$j++] = $dataKon;
			}
		}
		return View::make('user.profile')->with('data',$data)->with('dataKontes',$dataKontes);
	}

	public function getEditProfile(){
        $data = Auth::user()->anggota()->orderBy('urutan')->get();
        return View::make('user/edit')->with('data',$data);
    }


}
