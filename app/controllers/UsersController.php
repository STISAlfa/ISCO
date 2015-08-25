<?php

class UsersController extends Controller {

    private function cekwaktu($a,$b){
        $a = explode("-", $a);
        $b = explode("-", $b);
        if($a[0]<=$b[0]){
            if($a[1]<=$b[1]){
                if($a[2]<=$b[2]){
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
    public function getCurrentTime(){
        $endTime = Input::get('time');
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

    public function getKesamaan(){
        $user1 = Input::get('user1');
        $user2 = Input::get('user2');

        $user1 = User::where('username', $user1)->first();
        $user2 = User::where('username', $user2)->first();
        $var = "";
        $mirip = $this->compareJwb($user1,$user2);
        $var = number_format((float)$mirip, 2, '.', ''); 
        return $var."";
    }

    public function getUserKembar(){
        $var = "";
        $var = "
                <div class=\"container\">
                  <h2>User Yang Dicurigai</h2>
                  <table class=\"table table-condensed\">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Sekolah</th>
                      </tr>
                    </thead>
                    <tbody>";

        $users = User::all();
        foreach ($users as $users1) {
            foreach ($users as $users2) {
                if($users1->id !== $users2->id){

                    $sama = $this->compareJwb($users1,$users2);

                    if($sama>80){
                        if (!preg_match($users1->username,$var))
                            $var = $var."
                                     <tr>
                                        <td>".$users1->username."</td>
                                        <td>".$users1->asal_sekolah."</td>
                                      </tr>
                            ";
                        if (!preg_match($users2->username,$var))
                             $var = $var."
                                     <tr>
                                        <td>".$users2->username."</td>
                                        <td>".$users2->asal_sekolah."</td>
                                      </tr>
                            ";
                        }
                }
            }
        }
        $var = $var."
                    </tbody>
              </table>
            </div>
            ";
        return $var;
    }
    
    private function compareJwb($input1,$input2){
        $jwbn1 = Result::where('user_id', $input1->id)->first();
        $us1 = explode(";", $jwbn1->answer_list);

        $jwbn2 = Result::where('user_id', $input2->id)->first();
        $us2 = explode(";", $jwbn2->answer_list);
        
        $sama=0;

        for ($i=0; $i < count($us1); $i++) { 
            if($us1[$i]==$us2[$i]){
                $sama++;
            }
        }

        $mirip = ($sama/60)*100;
        return $mirip;
    }

    public function getUserEssay(){
        return View::make('admin/user/essay');   
    }

    public function getUserPaper(){
        return View::make('admin/user/paper');   
    }

    public function getDataTableUser(){
        return Datatable::collection(User::all())
        ->showColumns('id', 'created_at','username','email','asal_sekolah','confirmed')
        ->addColumn('nama1', function($model){
            $user = $model->anggota()->get();
            return $user[0]->nama;
        })
        ->addColumn('nis1', function($model){
            $user = $model->anggota()->get();
            return $user[0]->nis;
        })
        ->addColumn('tahunmasuk1', function($model){
            $user = $model->anggota()->get();
            return $user[0]->tahun_masuk;
        })
        ->addColumn('handphone1', function($model){
            $user = $model->anggota()->get();
            return $user[0]->handphone;
        })
        ->addColumn('kp1', function($model){
            $user = $model->anggota()->get();
            return $user[0]->kartu_pelajar_dir;

        })
        ->addColumn('nama2', function($model){
            $user = $model->anggota()->get();
            return $user[1]->nama;
        })
        ->addColumn('nis2', function($model){
            $user = $model->anggota()->get();
            return $user[1]->nis;
        })
        ->addColumn('tahunmasuk2', function($model){
            $user = $model->anggota()->get();
            return $user[1]->tahun_masuk;
        })
        ->addColumn('handphone2', function($model){
            $user = $model->anggota()->get();
            return $user[1]->handphone;
        })
        ->addColumn('kp2', function($model){
            $user = $model->anggota()->get();
            return $user[1]->kartu_pelajar_dir;

        })
        ->addColumn('status',function($model){
            $st = $model->status;
            if($st==1){
                return '<div class="btn-group centered" data-toggle="buttons" id="'.$model->id.'">
                <label class="btn btn-primary btn-white active">
                    <input type="radio" name="options" id="aktif" autocomplete="off"> Aktif
                </label>
                <label class="btn btn-primary btn-white">
                    <input type="radio" name="options" id="nonaktif" autocomplete="off"> nonaktif
                </label>
            </div>';
                //return '<p><input id="switch-size" type="checkbox" checked data-size="mini"></p>';
        }
        else{
            return '<div class="btn-group centered" data-toggle="buttons" id="'.$model->id.'">
            <label class="btn btn-primary btn-white">
                <input type="radio" name="options" id="aktif" autocomplete="off"> Aktif
            </label>
            <label class="btn btn-primary btn-white active">
                <input type="radio" name="options" id="nonaktif" autocomplete="off"> nonaktif
            </label>
        </div>';
                //return '<p><input id="switch-size" type="checkbox" data-size="mini"></p>';
    }
})
->searchColumns('username')
->orderColumns('id', 'username','asal_sekolah','status')
->setAliasMapping()
->make();
}

public function getDataTableScore(){
    return Datatable::collection(DB::table('user')->join('result', 'result.user_id', '=', 'user.id')->get())
    ->showColumns('id', 'created_at','username','email','asal_sekolah','score')
    ->addColumn('nama1', function($model){
        $user = $model->anggota()->get();
        return $user[0]->nama;
    })
    ->addColumn('nis1', function($model){
        $user = $model->anggota()->get();
        return $user[0]->nis;
    })
    ->addColumn('tahunmasuk1', function($model){
        $user = $model->anggota()->get();
        return $user[0]->tahun_masuk;
    })
    ->addColumn('handphone1', function($model){
        $user = $model->anggota()->get();
        return $user[0]->handphone;
    })
    ->addColumn('kp1', function($model){
        $user = $model->anggota()->get();
        return $user[0]->kartu_pelajar_dir;
    })
    ->addColumn('nama2', function($model){
        $user = $model->anggota()->get();
        return $user[1]->nama;
    })
    ->addColumn('nis2', function($model){
        $user = $model->anggota()->get();
        return $user[1]->nis;
    })
    ->addColumn('tahunmasuk2', function($model){
        $user = $model->anggota()->get();
        return $user[1]->tahun_masuk;
    })
    ->addColumn('handphone2', function($model){
        $user = $model->anggota()->get();
        return $user[1]->handphone;
    })
    ->addColumn('score', function($model){
        $user = $model->score;
        return $user[1]->score;
    })
    ->addColumn('kp2', function($model){
        $user = $model->anggota()->get();
        return $user[1]->kartu_pelajar_dir;

    })
    ->searchColumns('username')
    ->orderColumns('id', 'username','asal_sekolah','score')
    ->setAliasMapping()
    ->make();
}

public function getDatatablePaper()
{

    return Datatable::collection(Paper_Team::all())
    ->showColumns('id', 'judulpaper','created_at','paper')
    ->addColumn('nama1', function($model){
        $user = $model->member()->get();
        return $user[0]->nama;
    })
        /*
        ->addColumn('nama2', function($model){
            $user = $model->member()->get();
             return $user[1]->nama;
        })
        ->addColumn('nama3', function($model){
            $user = $model->member()->get();
             return $user[2]->nama;
        })
        */
->addColumn('jeniskelamin1', function($model){
    $user = $model->member()->get();
    return $user[0]->jeniskelamin;
})
        /*
        ->addColumn('jeniskelamin2', function($model){
            $user = $model->member()->get();
             return $user[1]->jeniskelamin;
        })
        ->addColumn('jeniskelamin3', function($model){
            $user = $model->member()->get();
             return $user[2]->jeniskelamin;
        })
        */
->addColumn('sma1', function($model){
    $user = $model->member()->get();
    return $user[0]->sma;
})
        /*
        ->addColumn('sma2', function($model){
            $user = $model->member()->get();
             return $user[1]->sma;
        })
        ->addColumn('sma3', function($model){
            $user = $model->member()->get();
             return $user[2]->sma;
        })
        */
->addColumn('jurusan1', function($model){
    $user = $model->member()->get();
    return $user[0]->jurusan;
})
        /*
        ->addColumn('jurusan2', function($model){
            $user = $model->member()->get();
             return $user[1]->jurusan;
        })
        ->addColumn('jurusan3', function($model){
            $user = $model->member()->get();
             return $user[2]->jurusan;
        })
        */
->addColumn('nim1', function($model){
    $user = $model->member()->get();
    return $user[0]->nim;
})
    /*
        ->addColumn('nim2', function($model){
            $user = $model->member()->get();
             return $user[1]->nim;
        })
        ->addColumn('nim3', function($model){
            $user = $model->member()->get();
             return $user[2]->nim;
        })
        */
->addColumn('email1', function($model){
    $user = $model->member()->get();
    return $user[0]->email;
})
        /*
        ->addColumn('email2', function($model){
            $user = $model->member()->get();
             return $user[1]->email;
        })
        ->addColumn('email3', function($model){
            $user = $model->member()->get();
             return $user[2]->email;
        })
        */
->addColumn('tahunmasuk1', function($model){
    $user = $model->member()->get();
    return $user[0]->tahunmasuk;
})
        /*
        ->addColumn('tahunmasuk2', function($model){
            $user = $model->member()->get();
             return $user[1]->tahunmasuk;
        })
        ->addColumn('tahunmasuk3', function($model){
            $user = $model->member()->get();
             return $user[2]->tahunmasuk;
        })
        */
->addColumn('handphone1', function($model){
    $user = $model->member()->get();
    return $user[0]->handphone;
})
        /*
        ->addColumn('handphone2', function($model){
            $user = $model->member()->get();
             return $user[1]->handphone;
        })
        ->addColumn('handphone3', function($model){
            $user = $model->member()->get();
             return $user[2]->handphone;
        })
        */
->addColumn('kp1', function($model){
    $user = $model->member()->get();
    return $user[0]->kartupelajar;
})
        /*
        ->addColumn('kp2', function($model){
            $user = $model->member()->get();
             return $user[1]->kartupelajar;
        })
        ->addColumn('kp3', function($model){
            $user = $model->member()->get();
             return $user[2]->kartupelajar;
        })
        */
->searchColumns('judulpaper')
->orderColumns('id', 'judulpaper','created_at')
->setAliasMapping()
->make();
}


public function getDatatableEssay()
{
    return Datatable::collection(Essay::all())
    ->showColumns('id', 'nama','universitas','jurusan','nim','angkatan','email','handphone','ktm','judulessay','essay')
    ->searchColumns('nama')
    ->orderColumns('id', 'nama','universitas','judulessay')
    ->setAliasMapping()
    ->make();
}

public function getSgDashboard(){
    return View::make('admin/sg/index');
}

public function getEditProfile(){
    $data = Auth::user()->anggota()->orderBy('urutan')->get();
    return View::make('user/edit')->with('data',$data);
}



public function updateConfirm(){
    $id = Input::get('id');
    $user = User::find($id);
    if(Input::get('st')=="false"){
        $user->status = 0;
    }        
    else $user->status = 1;
    $user->save();

}
}
