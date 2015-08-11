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


			    	
			    	return View::make('user/soal')->with('data',$added)->with('kontes',$kontes);
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
			if($this->getUdahmulai($kontes->starttime)+100>0){
				if($this->getCurrentTime($kontes->endtime)+100>0){
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


			    	
			    	return View::make('user/soal')->with('data',$added)->with('kontes',$kontes);
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