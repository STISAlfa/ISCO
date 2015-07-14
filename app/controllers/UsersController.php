<?php

class UsersController extends Controller {

    public function getDashboard(){

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
        ->addColumn('status',function($model){
            $st = $model->status;
            if($st==1){
                return '<p><input id="switch-size" type="checkbox" checked data-size="mini"></p>';
            }
            else{
                return '<p><input id="switch-size" type="checkbox" data-size="mini"></p>';
            }
        })
        ->searchColumns('username')
        ->orderColumns('id', 'username','asal_sekolah','status')
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

    public function getDatatablePaper()
    {

        return Datatable::collection(Paper_Team::all())
        ->showColumns('id', 'judulpaper','created_at','paper')
        ->addColumn('nama1', function($model){
            $user = $model->member()->get();
             return $user[0]->nama;
        })
        ->addColumn('nama2', function($model){
            $user = $model->member()->get();
             return $user[1]->nama;
        })
        ->addColumn('nama3', function($model){
            $user = $model->member()->get();
             return $user[2]->nama;
        })
        ->addColumn('jeniskelamin1', function($model){
            $user = $model->member()->get();
             return $user[0]->jeniskelamin;
        })
        ->addColumn('jeniskelamin2', function($model){
            $user = $model->member()->get();
             return $user[1]->jeniskelamin;
        })
        ->addColumn('jeniskelamin3', function($model){
            $user = $model->member()->get();
             return $user[2]->jeniskelamin;
        })
        ->addColumn('sma1', function($model){
            $user = $model->member()->get();
             return $user[0]->sma;
        })
        ->addColumn('sma2', function($model){
            $user = $model->member()->get();
             return $user[1]->sma;
        })
        ->addColumn('sma3', function($model){
            $user = $model->member()->get();
             return $user[2]->sma;
        })
        ->addColumn('jurusan1', function($model){
            $user = $model->member()->get();
             return $user[0]->jurusan;
        })
        ->addColumn('jurusan2', function($model){
            $user = $model->member()->get();
             return $user[1]->jurusan;
        })
        ->addColumn('jurusan3', function($model){
            $user = $model->member()->get();
             return $user[2]->jurusan;
        })
        ->addColumn('nim1', function($model){
            $user = $model->member()->get();
             return $user[0]->nim;
        })

        ->addColumn('nim2', function($model){
            $user = $model->member()->get();
             return $user[1]->nim;
        })
        ->addColumn('nim3', function($model){
            $user = $model->member()->get();
             return $user[2]->nim;
        })
        ->addColumn('email1', function($model){
            $user = $model->member()->get();
             return $user[0]->email;
        })
        ->addColumn('email2', function($model){
            $user = $model->member()->get();
             return $user[1]->email;
        })
        ->addColumn('email3', function($model){
            $user = $model->member()->get();
             return $user[2]->email;
        })
        ->addColumn('tahunmasuk1', function($model){
            $user = $model->member()->get();
             return $user[0]->tahunmasuk;
        })
        ->addColumn('tahunmasuk2', function($model){
            $user = $model->member()->get();
             return $user[1]->tahunmasuk;
        })
        ->addColumn('tahunmasuk3', function($model){
            $user = $model->member()->get();
             return $user[2]->tahunmasuk;
        })
        ->addColumn('handphone1', function($model){
            $user = $model->member()->get();
             return $user[0]->handphone;
        })
        ->addColumn('handphone2', function($model){
            $user = $model->member()->get();
             return $user[1]->handphone;
        })
        ->addColumn('handphone3', function($model){
            $user = $model->member()->get();
             return $user[2]->handphone;
        })
        ->addColumn('kp1', function($model){
            $user = $model->member()->get();
             return $user[0]->kartupelajar;
        })
        ->addColumn('kp2', function($model){
            $user = $model->member()->get();
             return $user[1]->kartupelajar;
        })
        ->addColumn('kp3', function($model){
            $user = $model->member()->get();
             return $user[2]->kartupelajar;
        })
        ->searchColumns('judulpaper')
        ->orderColumns('id', 'judulpaper','created_at')
        ->setAliasMapping()
        ->make();
    }

}
