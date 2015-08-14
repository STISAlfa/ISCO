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
	public function postEditProfile(){
		$rules = array(
			'kontak1' => 'between:10,12',
			'kontak2' => 'between:10,12',
            //'kontak3' => 'between:10,12',
			'tahunmasuk1' => 'between:4,4',
			'tahunmasuk2' => 'between:4,4',
            //'tahunmasuk3' => 'between:4,4',
<<<<<<< HEAD
            'kp1' 		=> 'image|max:500',
            'kp2'		=> 'image|max:500'
=======
			'kp1' 		=> 'image|max:5000',
			'kp2'		=> 'image|max:5000'
>>>>>>> origin/master
            //'kp3'		=> 'image|max:5000'
			);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
	        // get the error messages from the validator
			$messages = $validator->messages();
	        // redirect our user back to the form with the errors from the validator
			return Redirect::to('edit-profile')->withErrors($validator);
		} else {
			$user1 = Anggota::find(Input::get('idag1'));
			$user2 = Anggota::find(Input::get('idag2'));
	        //$user3 = Anggota::find(Input::get('idag3'));

			if(Input::get('nama1')!=null) $user1->nama = Input::get('nama1');
			if(Input::get('nama2')!=null) $user2->nama = Input::get('nama2');
	        //if(Input::get('nama3')!=null) $user3->nama = Input::get('nama3');

			if(Input::get('nis1')!=null) $user1->nis = Input::get('nis1');
			if(Input::get('nis2')!=null) $user2->nis = Input::get('nis2');
	        //if(Input::get('nis3')!=null) $user3->nis = Input::get('nis3');
			if(Input::get('tahunmasuk1')!=null) $user1->tahun_masuk = Input::get('tahunmasuk1');
			if(Input::get('tahunmasuk2')!=null) $user2->tahun_masuk = Input::get('tahunmasuk2');
	        //if(Input::get('tahunmasuk3')!=null) $user3->tahun_masuk = Input::get('tahunmasuk3');
			if(Input::get('kontak1')!=null) $user1->handphone = Input::get('kontak1');
			if(Input::get('kontak2')!=null) $user2->handphone = Input::get('kontak2');
	        //if(Input::get('kontak3')!=null) $user3->handphone = Input::get('kontak3');

			if(Input::file('kp1')!=null){
				$destinationPath = 'assets/image/isco/sg/kp';
				$file = Input::file('kp1');
				$extension = Input::file('kp1')->getClientOriginalExtension();
				$filename = '1'.sha1(time().time()).".{$extension}";
				$upload_success = Input::file('kp1')->move($destinationPath, $filename);
				if($upload_success){
					$user1->kartu_pelajar_dir = $destinationPath.'/1'.$filename;
				}
				else return Redirect::to('edit-profile')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');
			}
			
			if(Input::file('kp2')!=null){
				$destinationPath2 = 'assets/image/isco/sg/kp';
				$file2 = Input::file('kp2');
				$extension2 = Input::file('kp2')->getClientOriginalExtension();
				$filename2 = '2'.sha1(time().time()).".{$extension2}";
				$upload_success2 = Input::file('kp2')->move($destinationPath2, $filename2);
				if($upload_success2){
					$user2->kartu_pelajar_dir = $destinationPath2.'/2'.$filename2;
				}
				else return Redirect::to('edit-profile')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');
			}

            /*
			
			if(Input::file('kp3')!=null){
                $destinationPath3 = 'assets/image/isco/sg/kp';
                $file3 = Input::file('kp3');
                $extension3 = Input::file('kp3')->getClientOriginalExtension();
                $filename3 = sha1(time().time()).".{$extension3}";
                $upload_success3 = Input::file('kp3')->move($destinationPath3, $filename3);
                if($upload_success3){
                    $user3->kartu_pelajar_dir = $destinationPath3.'/'.$filename3;
                }
                else return Redirect::to('edit-profile')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');
            }
            */
            $user1->save();
            $user2->save();
			//$user3->save();
            return Redirect::to('')->with('success','data anda berhasil di update');
        }
    }
}
