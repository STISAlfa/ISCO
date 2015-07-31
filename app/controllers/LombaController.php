<?php

class LombaController extends Controller {

	// Be sure to call parent::__construct() when needed
    public function __construct()
    {
        // Perform CSRF check on all post/put/patch/delete requests
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
    }

    public function showSuccess(){
    	$data = Session::get('data');

    	if($data != null){
    		return View::make('lomba.success')->with('data',$data);
    	}
    	else return Redirect::to('paper');
    }


	public function showEssay(){
		return View::make('lomba.essay');
	}

	public function showPaper(){
		return View::make('lomba.paper');
	}

	public function postEssay(){
		$rules = array(
	        'nama'             => 'required',                        // just a normal required validation
	        'universitas'	   => 'required',                        // just a normal required validation
	        'jurusan'    	   => 'required',                          // just a normal required validation
	        'nim'			   => 'required',                        // just a normal required validation
	        'angkatan'		   => 'required',                        // just a normal required validation
	        'email'			   => 'required|email|unique:Essay',   // required and must be unique in the Essay table
	        'handphone'		   => 'required',                        // just a normal required validation
	        'ktm'			   => 'required|image|max:5000',
	        'judulessay'	   => 'required',
	        'essay'			   => 'required|max:5000',
	        'captcha'		   => 'required|captcha'

   		 );

		 $validator = Validator::make(Input::all(), $rules);

		 if ($validator->fails()) {

	        // get the error messages from the validator
	        $messages = $validator->messages();

	        // redirect our user back to the form with the errors from the validator
	        return Redirect::to('essay')->withErrors($validator);

	    } else {
	        // validation successful ---------------------------

	        // our duck has passed all tests!
	        // let him enter the database

	        // create the data for our duck
	        $essay = new Essay;
	        $essay->nama     = Input::get('nama');
	        $essay->universitas = Input::get('universitas');
	        $essay->jurusan = Input::get('jurusan');
	        $essay->nim = Input::get('nim');
	        $essay->angkatan = Input::get('angkatan');
	        $essay->handphone = Input::get('angkatan');
	        $essay->email    = Input::get('email');
	        $essay->judulessay = Input::get('judulessay');
	        /*
	        $ktm = Input::file('ktm');
		    $namektm = Input::get('email')."_".$ktm->getClientOriginalName();
		    $ktm->move(storage_path().'assets\img\isco\ktm', $namektm);
	        $essay->ktm = storage_path()."assets\img\isco\ktm".$namektm;
			*/
	        if(Input::file('ktm')!=null){
                $destinationPath = 'assets/image/isco/ktm';
                $file = Input::file('ktm');
                $extension = Input::file('ktm')->getClientOriginalExtension();
                $filename = Input::get('nama').sha1(time().time()).".{$extension}";

                $upload_success = Input::file('ktm')->move($destinationPath, $filename);
                if($upload_success){
                    $essay->ktm = $destinationPath.'/'.$filename;
                }
            }
	        /*
	        $essayfile = Input::file('essay');
	        $namaessay = Input::get('email')."_".$essayfile->getClientOriginalName();
	        $essayfile->move(storage_path().'assets\img\isco\essay',$namaessay);
	        $essay->essay = storage_path()."assets\img\isco\essay".$namaessay;
			*/
	        if(Input::file('essay')!=null){
                $destinationPath2 = 'assets/image/isco/essay';
                $file2 = Input::file('essay');
                $extension2 = Input::file('essay')->getClientOriginalExtension();
                $filename2 = Input::get('nama').sha1(time().time()).".{$extension2}";

                $upload_success2 = Input::file('essay')->move($destinationPath2, $filename2);
                if($upload_success2){
                    $essay->essay = $destinationPath2.'/'.$filename2;
                }
            }

	        $essay->save();

	        // redirect ----------------------------------------
	        // redirect our user back to the form so they can do it all over again
	        return Redirect::to('essay');

	    }
	}

		public function postPaper(){
		$rules = array(
	        'nama1'            => 'required',                        // just a normal required validation
	        'jeniskelamin1'	   => 'required',
	        'sma1'			   => 'required',                        // just a normal required validation
	        'jurusan1'    	   => 'required',                          // just a normal required validation
	        'nim1'			   => 'required',                        // just a normal required validation
	        'tahunmasuk1'	   => 'required',                        // just a normal required validation
	        'email1'		   => 'required|email|unique:paper_member,email',   // required and must be unique in the Essay table
	        'handphone1'	   => 'required',                        // just a normal required validation
	        'kp1'			   => 'required|image|max:5000',
	        
	        /*
	        'nama2'             => 'required',                        // just a normal required validation
	        'jeniskelamin2'	   => 'required',
	        'sma2'			   => 'required',                        // just a normal required validation
	        'jurusan2'    	   => 'required',                          // just a normal required validation
	        'nim2'			   => 'required',                        // just a normal required validation
	        'tahunmasuk2'	   => 'required',                        // just a normal required validation
	        'email2'			   => 'required|email|unique:paper_member,email',   // required and must be unique in the Essay table
	        'handphone2'		   => 'required',                        // just a normal required validation
	        'kp2'			   => 'required|image|max:5000',
	        
	        'nama3'             => 'required',                        // just a normal required validation
	        'jeniskelamin3'	   => 'required',
	        'sma3'			   => 'required',                        // just a normal required validation
	        'jurusan3'    	   => 'required',                          // just a normal required validation
	        'nim3'			   => 'required',                        // just a normal required validation
	        'tahunmasuk3'	   => 'required',                        // just a normal required validation
	        'email3'			   => 'required|email|unique:paper_member,email',   // required and must be unique in the Essay table
	        'handphone3'		   => 'required',                        // just a normal required validation
	        'kp3'			   => 'required|image|max:5000',
	        */
	        'judulpaper'	   => 'required',
	        'paper'			   => 'required|max:5000',
	        'captcha'		   => 'required|captcha'

   		 );

		 $validator = Validator::make(Input::all(), $rules);

		 if ($validator->fails()) {

	        // get the error messages from the validator
	        $messages = $validator->messages();

	        // redirect our user back to the form with the errors from the validator
	        return Redirect::to('paper')->withErrors($validator);

	    } else {
	        // validation successful ---------------------------

	        // our duck has passed all tests!
	        // let him enter the database

	        // create the data for our duck
	        $team = new Paper_Team;
	        $team->judulpaper     = Input::get('judulpaper');
	        if(Input::file('paper')!=null){
                $destinationPath = 'assets/image/isco/paper';
                $file = Input::file('paper');
                $extension = Input::file('paper')->getClientOriginalExtension();
                $filename = Input::get('judulpaper').sha1(time().time()).".{$extension}";

                $upload_success = Input::file('paper')->move($destinationPath, $filename);
                if($upload_success){
                    $team->paper = $destinationPath.'/'.$filename;
                    $papername = $destinationPath.'/'.$filename;
                }
                else return Redirect::to('paper')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');
            }
			else return Redirect::to('paper')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');


	        //$team->save();


	        //$team_id = Paper_Team::where('paper','=',$papername)->first()->id;
            $member1 = new Paper_Member;
	        //$member1->team_id = $team_id; 
	        $member1->nama = Input::get('nama1');
	        $member1->sma = Input::get('sma1');
	        $member1->jurusan = Input::get('jurusan1');
	        $member1->nim    = Input::get('nim1');
	        $member1->tahunmasuk = Input::get('tahunmasuk1');
	        $member1->email = Input::get('email1');
	        $member1->handphone = Input::get('handphone1');
	        $member1->jeniskelamin = Input::get('jeniskelamin1');
	        if(Input::file('kp1')!=null){
                $destinationPath2 = 'assets/image/isco/kp';
                $file2 = Input::file('kp1');
                $extension2 = Input::file('kp1')->getClientOriginalExtension();
                $filename2 = Input::get('nama1').sha1(time().time()).".{$extension2}";

                $upload_success2 = Input::file('kp1')->move($destinationPath2, $filename2);
                if($upload_success2){
                    $member1->kartupelajar = $destinationPath2.'/'.$filename2;
                }
                else return Redirect::to('paper')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');

            }
            else return Redirect::to('paper')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');

            //$member1->save();
            /*
            $member2 = new Paper_Member;
            //$member2->team_id = $team_id; 
	        $member2->nama = Input::get('nama2');
	        $member2->sma = Input::get('sma2');
	        $member2->jurusan = Input::get('jurusan2');
	        $member2->nim    = Input::get('nim2');
	        $member2->tahunmasuk = Input::get('tahunmasuk2');
	        $member2->email = Input::get('email2');
	        $member2->handphone = Input::get('handphone2');
	        $member2->jeniskelamin = Input::get('jeniskelamin2');
	        if(Input::file('kp2')!=null){
                $destinationPath3 = 'assets/image/isco/kp';
                $file3 = Input::file('kp2');
                $extension3 = Input::file('kp2')->getClientOriginalExtension();
                $filename3 = Input::get('nama2').sha1(time().time()).".{$extension3}";

                $upload_success3 = Input::file('kp2')->move($destinationPath3, $filename3);
                if($upload_success3){
                    $member2->kartupelajar = $destinationPath3.'/'.$filename3;
                }
                else return Redirect::to('paper')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');
            }
            else return Redirect::to('paper')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');
            //$member2->save();

            $member3 = new Paper_Member;
            //$member3->team_id = $team_id; 
	        $member3->nama = Input::get('nama3');
	        $member3->sma = Input::get('sma3');
	        $member3->jurusan = Input::get('jurusan3');
	        $member3->nim    = Input::get('nim3');
	        $member3->tahunmasuk = Input::get('tahunmasuk3');
	        $member3->email = Input::get('email3');
	        $member3->handphone = Input::get('handphone3');
	        $member3->jeniskelamin = Input::get('jeniskelamin3');
	        if(Input::file('kp3')!=null){
                $destinationPath4 = 'assets/image/isco/kp';
                $file4 = Input::file('kp3');
                $extension4 = Input::file('kp3')->getClientOriginalExtension();
                $filename4 = Input::get('nama3').sha1(time().time()).".{$extension4}";

                $upload_success4 = Input::file('kp3')->move($destinationPath4, $filename4);
                if($upload_success4){
                    $member3->kartupelajar = $destinationPath4.'/'.$filename4;
                }
                else return Redirect::to('paper')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');
            }
            else return Redirect::to('paper')->with('errors','Terjadi Kesalahan, Coba Daftar Lagi');
            //$member3->save();
	        /*
	        $ktm = Input::file('ktm');
		    $namektm = Input::get('email')."_".$ktm->getClientOriginalName();
		    $ktm->move(storage_path().'assets\img\isco\ktm', $namektm);
	        $essay->ktm = storage_path()."assets\img\isco\ktm".$namektm;
			*/
	        
	        /*
	        $essayfile = Input::file('essay');
	        $namaessay = Input::get('email')."_".$essayfile->getClientOriginalName();
	        $essayfile->move(storage_path().'assets\img\isco\essay',$namaessay);
	        $essay->essay = storage_path()."assets\img\isco\essay".$namaessay;
			*/
	        
	        DB::transaction(function() use ($member1, $team, $papername) {
			   $team = $team->save();
			   $tem = Paper_Team::where('paper','=',$papername)->first();
			   $success = $tem->member()->save($member1);
			   //$success = $tem->member()->save($member2);
			   //$success = $tem->member()->save($member3);
			   //Paper_Team::where('paper','=',$papername)->member()->save($member1);
			   //Paper_Team::find($team->id)->member()->save($member2);
			   //Paper_Team::find($team->id)->member()->save($member3);
			});

			$data=Input::get('judulpaper');

	        // redirect ----------------------------------------
	        // redirect our user back to the form so they can do it all over again
	        		return Redirect::to('paper/success')->with('data',$data);

	    }
	}

}
