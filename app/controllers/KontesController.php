<?php
class KontesController extends Controller {
	public function __construct()
    {
        // Perform CSRF check on all post/put/patch/delete requests
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
    }
    private function cekwaktu($a,$b){
        $a = explode("-", $a);
        $b = explode("-", $b);
        if((int)$a[0]<=(int)$b[0]){
            if((int)$a[1]<=(int)$b[1]){
                if((int)$a[2]<=(int)$b[2]){
                    return false;
                }
                else{
                    return true;
                }
            }
            else{
                return true;
            }
        }
        return true;
    }
    //buat kontes
     public function getCurrentTime($end){
        $endTime = $end;
        $mytime = Carbon\Carbon::now()->toDateTimeString();
        $arr = explode(" ", $mytime);
        $arrdetail = explode(":", $arr[1]);
        $arr2 = explode(" ", $endTime);
        if($this->cekwaktu($arr[0],$arr2[0])){
            return 0;
        }
        
        $endTimedetail = explode(":", $arr2[1]);
        $sec = 0;
        if($arrdetail[0]<=$endTimedetail[0]){
            $sec += 3600*((int)$endTimedetail[0]-(int)$arrdetail[0]);
            if($arrdetail[1]<=$endTimedetail[1]){
                $sec += 60*((int)$endTimedetail[1]-(int)$arrdetail[1]);
                if($arrdetail[2]<=$endTimedetail[2]){
                    $sec += ((int)$endTimedetail[2]-(int)$arrdetail[2]);
                }
                else{
                    $sec -=((int)$arrdetail[2]-(int)$endTimedetail[2]);
                }
            }
            else{
                $sec -=60*((int)$arrdetail[1]-(int)$endTimedetail[1]);
            }
        }
        
        return (int)$sec;
    }
    private function getUdahmulai($start){
    	$starttime = $start;
    	$mytime = Carbon\Carbon::now()->toDateTimeString();
        $arr2 = explode(" ", $mytime);
        $arr = explode(" ", $starttime);
        $arrdetail = explode(":", $arr[1]);
        $endTimedetail = explode(":", $arr2[1]); //sama kayak start time 
        if($this->cekwaktu($arr[0],$arr2[0])){
            return 0;
        }
        else if($arr[0]!=$arr2[0]){
        	return 1;
        }
        
        $sec = 0;
        if($arrdetail[0]<=$endTimedetail[0]){
            $sec += 3600*((int)$endTimedetail[0]-(int)$arrdetail[0]);
            if($arrdetail[1]<=$endTimedetail[1]){
                $sec += 60*((int)$endTimedetail[1]-(int)$arrdetail[1]);
                if($arrdetail[2]<=$endTimedetail[2]){
                    $sec += ((int)$endTimedetail[2]-(int)$arrdetail[2]);
                }
                else{
                    $sec -=((int)$arrdetail[2]-(int)$endTimedetail[2]);
                }
            }
            else{
                $sec -=60*((int)$arrdetail[1]-(int)$endTimedetail[1]);
            }
        }
        
        return (int)$sec;
    }
	public function getKontes($idKontes){
		
		$kontes = Kontes::find($idKontes);
		if($kontes==null){
			return Redirect::to('/')->with('error',"Mohon Maaf, Kontes tersebut belum tersedia");
		}
		else if(Auth::user()->registered($idKontes)){
			if($this->getUdahmulai($kontes->starttime)>0){
				if($this->getCurrentTime($kontes->endtime)>0){
					$data = Soal_Branch::where('kontes_id','=',$idKontes)->get();
					$soals = Soal::orderBy('no')->get();
					
					$added = array();
					$c=0;
					$d=0;
					
					$res_ans = Result::where('kontes_id','=',$idKontes)->where('user_id','=',Auth::user()->id)->first();
					if($res_ans!=null)
					$res_arr = explode(";", $res_ans->answer_list);
					else{
						$res_arr = array();
					}
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
			    	
			    	return View::make('user/soal')->with('data',$added)->with('kontes',$kontes)->with('res',$res_arr);
	     		}
	     		else{
	     			return Redirect::to('/')->with('error',"Kontes Sudah Berakhir. Terima Kasih");
	     		}
	     	}
	     	else {
	     		return Redirect::to('/')->with('error',"Kontes Belum dimulai. Terima Kasih");	
	     	}
		}
		else{
			return Redirect::to('/')->with('error',"Mohon Maaf, Anda Tidak Berhak Mengakses Halaman Kontes Tersebut.");
		}
		
	}
	 
	public function postKontes($idKontes){
		$kontes = Kontes::find($idKontes);
		if($kontes==null){
			return 0;
		}
		else if(Auth::user()->registered($idKontes)){
			if($this->getUdahmulai($kontes->starttime)>0){
				if($this->getCurrentTime($kontes->endtime)>0){
					$skor = 0;
					$bobot[1][1]=2;
					$bobot[1][0]=1;
					$bobot[2][1]=3;
					$bobot[2][0]=1;
					$bobot[3][1]=5;
					$bobot[3][0]=2;
					$data = Soal_Branch::where('kontes_id','=',$idKontes)->get();
					$soals = Soal::orderBy('no')->get();
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
					$answers = Input::get('answer');
					$arr_ans = explode(';', $answers);
					if(count($arr_ans)!=$c){
						return -1;	
					}
					else{
						$temp = 0;
						foreach($arr_ans as $ans){
							if($ans!="''"){
								if($arr_ans[$temp]==("'".$added[$temp]->id_correct_answer."'")){
									$skor+=$bobot[$added[$temp]->kategori][1];
								}
								else{
									$skor-=$bobot[$added[$temp]->kategori][0];
								}
							}
							$temp++;
						}
						
				    	$res = Result::where('user_id','=',Auth::user()->id)->where('kontes_id','=',$kontes->id)->first();
				    	if($res!=null){
				    		$res->score = $skor;
				    		$res->answer_list = $answers;
				    		$res->save();
				    	}
				    	else{
				    		$new_res = new Result();
				    		$new_res->user_id = Auth::user()->id;
				    		$new_res->kontes_id = $kontes->id;
				    		$new_res->answer_list = $answers;
				    		$new_res->score = $skor;
				    		$new_res->save();
				    	}
						return 1;
					}
			    	
	     		}
	     		else{
	     			return 0;
	     		}
	     	}
	     	else {
	     		return 0;	
	     	}
		}
		else{
			return 0;
		}
		
	}
}