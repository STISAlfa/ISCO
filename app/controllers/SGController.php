<?php

class SGController extends Controller {

	public function updateKontes(){
		$idKontes = Input::get('idKontes');
		$name = Input::get('name');
		$endtime = Input::get('endtime');
		$starttime = Input::get('starttime');

		$kontes = Kontes::find($idKontes);
		$kontes->nama = $name;
		$kontes->endtime = $endtime;
		$kontes->starttime = $starttime;
		if($kontes->save()){
			return $name;
		}
		else return 0;

	}

	public function getKontes(){
		$data = Kontes::All();
		return View::make('admin/sg/kontes/index')->with('data',$data);
	}


	public function postSoalList(){
		$idKontes = Input::get('idKontes');
		$listUser = Input::get('list');


		$enrole = Soal_Branch::where('kontes_id','=',$idKontes)->delete();
			
		if($listUser==null) return 1;

		foreach($listUser as $user){
			$enrole = new Soal_Branch();
			$enrole->soal_id = $user;
			$enrole->kontes_id = $idKontes;
			if($enrole->save()){
			}
			else{
				return 0;
			}
		}

		return 1;

	}
	
	public function getSoalList(){
		$idKontes = Input::get('idKontes');
		$data = Soal_Branch::where('kontes_id','=',$idKontes)->get();

		$soals = Soal::where('id_correct_answer','!=','NULL')->orderBy('no')->get();
		
		$added = array();
		$c=0;
		$d=0;

		foreach ($soals as $soal) {
			foreach($data as $useradd){
				if($soal->id==$useradd->soal_id){
					$added[$c]=$soal;
					$c++;
					unset($soals[$d]);
					break;
				}
				
			}
			$d++;
		}

		$ret['added'] = $added;
		$ret['lainnya'] = $soals;

		return json_encode($ret);
	}


	public function postUserList(){
		$idKontes = Input::get('idKontes');
		$listUser = Input::get('list');


		$enrole = Kontes_Enrole::where('kontes_id','=',$idKontes)->delete();
			
		if($listUser==null) return 1;

		foreach($listUser as $user){
			$enrole = new Kontes_Enrole();
			$enrole->user_id = $user;
			$enrole->kontes_id = $idKontes;
			if($enrole->save()){
			}
			else{
				return 0;
			}
		}

		return 1;

	}





	public function getUserList(){
		$idKontes = Input::get('idKontes');
		$data = Kontes_Enrole::where('kontes_id','=',$idKontes)->get();

		$users = User::where('status','=','1')->orderBy('username')->get();
		
		$added = array();
		$c=0;
		$d=0;

		foreach ($users as $user) {
			foreach($data as $useradd){
				if($user->id==$useradd->user_id){
					$added[$c]=$user;
					$c++;
					unset($users[$d]);
					break;
				}
				
			}
			$d++;
		}

		$ret['added'] = $added;
		$ret['lainnya'] = $users;

		return json_encode($ret);
	}

	public function getSoal(){
		$data = Soal::orderBy('no')->get();
		$ans = $data[0]->answer()->get();
        return View::make('admin/sg/soal/index')->with('data',$data)->with('ans',$ans);
	}

	public function viewUserSoal(){
		$data = Soal::orderBy('no')->get();
		//$ans = $data[0]->answer()->get();
		$ans = array();
		$i=0;
		foreach($data as $soal){
			$a = $soal->answer()->orderBy('urutan')->get();
			for($j=0;$j<=4;$j++) $ans[$i][$j] = $a[$j]->deskripsi;
			$i++;
		}
        return View::make('admin/sg/soal/soaluser')->with('data',$data)->with('ans',$ans);
	}

	public function addSoal(){
		$kodesoal = Input::get('kode');
		if($kodesoal!=null){
			$var = DB::transaction(function($kodesoal) use ($kodesoal){		        	
				$soal = new Soal;
				$soal->kodesoal = $kodesoal;
				$soal->no = 10000;
				$soal->save();
				for($i=1;$i<=5;$i++){
					$ans = new Answer;
			        $ans->urutan = $i;
			        $ans->question_id = $soal->id;
			        $ans->save();
				}
				return json_encode($soal->id);
			});
			return $var;
		}
	}

	public function updateSoal(){
		$userdata = array(
			'urutan' => Input::get('action'),
			'id' => Input::get('record')
		);
		
		$rules = array(
			'urutan' =>'Required',
			'id' => 'Required'
		);

		
		$validator = Validator::make($userdata, $rules);
		
		if ($validator->passes() && Input::get('action')=='updateRecordsListings')
		{
			$updateRecordsArray = Input::get('record');
			$listingCounter = 1;
	        foreach ($updateRecordsArray as $recordIDValue) {		
	            $soal = Soal::find($recordIDValue);
	            if($soal!=NULL){
		            $soal->no = $listingCounter;
		            $soal->save();	
	        	}
	        	else{
	        		DB::transaction(function($listingCounter) use ($listingCounter){
		        	
		        		$soal = new Soal;
			        	$soal->no = $listingCounter;
			        	$soal->save();
						for($i=1;$i<=5;$i++){
		        			$ans = new Answer;
		        			$ans->urutan = $i;
		        			$ans->question_id = $soal->id;
		        			$ans->save();
		        		}
		        	});		
	        	}
	            $listingCounter += 1;
	        }
		}
		else{
			return View::make('admin/sg');
		}
	}

	public function getUser(){
		return View::make('admin/sg/user/index');
	}

	public function getPaketSoal(){
		$id_temp = Input::get('id');
		$id = str_replace("record_", "", $id_temp);
		$soal = Soal::find($id);
		$ans = $soal->answer()->orderBy('urutan')->get();
		$ret['soal'] = $soal;
		$ret['answer'] = $ans;
		return json_encode($ret);
	}

	public function updatePaketSoal(){
		$id_temp = Input::get('id');
		$id = str_replace("record_", "", $id_temp);
		$soal = Soal::find($id);

		$soal->deskripsi = Input::get('deskripsi');
		$soal->save();
	}

	public function updateKodeSoal(){
		$id_temp = Input::get('id');
		$id = str_replace("record_", "", $id_temp);
		$soal = Soal::find($id);

		$soal->kodesoal = Input::get('kodesoal');
		$soal->save();
	}


	public function updatePaketSoalOpsi(){
		$no_opsi = Input::get('opsi');
		$id_temp = Input::get('idSoal');
		$idsoal = str_replace("record_", "", $id_temp);
		$answerlist = Soal::find($idsoal)->answer()->get();
		$i=0;
		$c=-1;
		foreach($answerlist as $ans){
			if($ans->urutan==$no_opsi){
				$answer = $ans;
			}
		}
		$answer->deskripsi = Input::get('deskripsi');
		$answer->save();		
	}

	public function pilihOpsi(){
		$id_temp = Input::get('idSoal');
		$id = str_replace("record_", "", $id_temp);
		$soal = Soal::find($id);
		$soal->id_correct_answer = Input::get('idAnswer');
		$soal->save();
	}

}
