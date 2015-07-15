<?php

class SGController extends Controller {



	public function getSoal(){
		$data = Soal::orderBy('no')->get();
		$ans = $data[0]->answer()->get();
        return View::make('admin/sg/soal/index')->with('data',$data)->with('ans',$ans);
	}

	public function viewUserSoal(){
		$data = Soal::orderBy('no')->get();
		$ans = $data[0]->answer()->get();
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
