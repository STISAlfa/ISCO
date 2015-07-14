<?php

class AuthController extends Controller {

    // Be sure to call parent::__construct() when needed
    public function __construct()
    {
        // Perform CSRF check on all post/put/patch/delete requests
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
    }


    public function showRegister(){
        return View::make('layout/register');        
    }

    public function postRegister()
    {
        // Get all the inputs
        // id is used for login, username is used for validation to return correct error-strings
        $userdata = array(
            'username' => Input::get('username'),
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('password_confirmation'),
            'ketuatim' => Input::get('ketuatim'),
            'handphone' => Input::get('handphone'),
            'asal_sekolah' => Input::get('asal_sekolah'),
            'alamat_sekolah' => Input::get('alamat_sekolah'),
            'captcha' => Input::get('captcha')
        );

        // Declare the rules for the form validation.
        $rules = array(
            'username'  => 'Required|min:2|unique:user',
            'email' => 'Required|email|unique:user',
            'handphone' => 'Required|between:10,12',
            'asal_sekolah' => 'Required',
            'ketuatim' => 'Required',
            'alamat_sekolah' => 'Required',
            'password'  => 'Required|alpha_num|between:6,12|confirmed',
            'password_confirmation' => 'Required|alpha_num|between:6,12',
            'captcha' => 'required|captcha'
        );

        $messages = array(
            'captcha' => 'Kode captcha tidak sesuai, ulangi pendaftaran.',
        );

        // Validate the inputs.
        $validator = Validator::make($userdata, $rules, $messages);

        // Check if the form validates with success.
        if ($validator->passes())
        {
            $confirmation_code = str_random(30);
            $user = new User;
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->handphone = Input::get('handphone');
            $user->asal_sekolah = Input::get('asal_sekolah');
            $user->alamat_sekolah = Input::get('alamat_sekolah');  
            $user->confirmation_code = $confirmation_code;         


            $view_data = array(
                'nama' => Input::get('username'),
                'confirmation_code' => $confirmation_code,
                'password' => Input::get('password'),
            );
            if(    
            Mail::send('emails.verify', $view_data, function($message) {
                $message->to(Input::get('email'), Input::get('username'))
                    ->subject('ISCO 2015 | Verify your email address');
            })){
                return Redirect::to('register')->with('error','maaf terjadi kesalahan, tolong ulangi pendaftaran');
            }  


            $user->save();


            

            DB::transaction(function(){
                $anggota = new Anggota();
                $anggota->nama = Input::get('ketuatim');
                $anggota->urutan = 1;
                $anggota->user_id = User::where('username','=',Input::get('username'))->first()->id;
                $anggota->save();

                $anggota2 = new Anggota();
                $anggota2->urutan = 2;
                $anggota2->user_id = User::where('username','=',Input::get('username'))->first()->id;
                $anggota2->save();
                
                $anggota3 = new Anggota(); 
                $anggota3->urutan = 3;
                $anggota3->user_id = User::where('username','=',Input::get('username'))->first()->id;
                $anggota3->save();
            });
            /*
            Mail::send('mail/welcome', array('username'=>Input::get('username'),'password'=>Input::get('password')), function($message){
                $message->to(Input::get('email'),Input::get('username'))->subject('Welcome to WEB Monitoring PKL54!');
            });
            */

            return Redirect::to('login')->with('success','Terima Kasih Telah Melalukan Registrasi! Silahkan cek Email anda untuk verifikasi akun');
        }

        // Something went wrong.
        return Redirect::to('register')->withErrors($validator)->withInput(Input::except('password'));
    }

    public function confirm($confirmation_code)
    {
        if(!$confirmation_code)
        {
            return Redirect::to('register')->with('error','maaf terjadi kesalahan, kode konfirmasi tidak ada. harap menghubungi panitia');
        }

        $user = User::where('confirmation_code','=',$confirmation_code)->first();

        if (!$user)
        {
            return Redirect::to('register')->with('error','maaf terjadi kesalahan, kode konfirmasi salah. harap menghubungi panitia');
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();


        return Redirect::route('login')->with('success','Selamat! Akun anda telah terverifikasi');
    }
    


    public function showLogin()
    {
        // Check if we already logged in
        if (Auth::check())
        {
            // Redirect to homepage
            return Redirect::to('');
        }

        // Show the login page
        return View::make('layout/login');
    }

    public function postLogin()
    {

        // set the remember me cookie if the user check the box
        $remember = (Input::has('remember')) ? true : false;
        // Get all the inputs
        // id is used for login, username is used for validation to return correct error-strings
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );

        // Declare the rules for the form validation.
        $rules = array(
            'username'  => 'Required',
            'password'  => 'Required'
        );

        // Validate the inputs.
        $validator = Validator::make($userdata, $rules);

        // Check if the form validates with success.
        if ($validator->passes())
        {
            $credentials = [
                'username' => Input::get('username'),
                'password' => Input::get('password'),
                'confirmed' => 1
            ];
            // Try to log the user in.
            if (Auth::attempt($credentials,$remember))
            {
                if(Auth::user()->isAdmin())
                    return Redirect::to('admin/');
                else
                    return Redirect::to('/');
                    //sementara redirect ke maintenance dlu
                    //Auth::logout();
                    
                    //return Redirect::route('maintenance');
                    //
            }
            else
            {
                // Redirect to the login page.
                return Redirect::to('login')->withErrors(array('password' => 'Password invalid'))->withInput(Input::except('password'));
            }
        }

        // Something went wrong.
        return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
    }

    public function getLogout()
    {
        // Log out
        Auth::logout();

        // Redirect to homepage
        return Redirect::to('')->with('success', 'You are logged out');
    }
}