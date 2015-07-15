<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



// Authentication

// Secure-Routes after login
Route::group(array('before' => 'auth'), function()
{
	
	Route::get('/', 'HomeController@showProfile');
	Route::get('home', 'HomeController@showProfile');
    Route::get('soal', array('as'=>'sg.soal','uses'=>'SoalController@showSoal'));

	Route::get('logout', 'AuthController@getLogout');

	Route::get('edit-profile',array('as'=>'edit-profile','uses'=>'HomeController@getEditProfile'));
	Route::post('edit-profile',array('as'=>'edit-profile','uses'=>'HomeController@postEditProfile'));

});


// admin routes
Route::group(array('prefix' => 'admin', 'before' => array('auth|admin')), function()
{
	// admin routes here...
	Route::get('/','AdminController@showDashboard');

	Route::get('logout',array('as'=>'admin.logout','uses'=>'AuthController@getLogout'));

	Route::get('essay', 'UsersController@getUserEssay');
	Route::get('paper', array('as'=>'paper','uses'=>'UsersController@getUserPaper'));

    Route::get('api/users/essay', array('as'=>'api.users.essay', 'uses'=>'UsersController@getDatatableEssay'));

    Route::get('sg',array('as'=>'sg','uses'=>'UsersController@getSgDashboard'));
    Route::get('sg/soal',array('as'=>'sg.soal','uses'=>'SGController@getSoal'));
    Route::get('sg/soal/user-view',array('as'=>'sg.soal.view','uses'=>'SGController@viewUserSoal'));
    Route::post('sg/soal/update',array('as'=>'sg.soal.update','uses'=>'SGController@updateSoal'));
    Route::post('sg/soal/add',array('as'=>'sg.soal.add','uses'=>'SGController@addSoal'));
    Route::get('sg/user',array('as'=>'sg.user','uses'=>'SGController@getUser'));
    Route::get('api/users/main', array('as'=>'api.users.main', 'uses'=>'UsersController@getDatatableUser'));


    Route::get('api/users/paper', array('as'=>'api.users.paper', 'uses'=>'UsersController@getDatatablePaper'));

    Route::post('currenttime',array('as'=>'currenttime','uses'=>'AdminController@getCurrentTime'));

    //Route::get('users','UsersController@getDashboard');
    //Route::get('soal','SoalController@getDashboard');

    Route::get('service/soal',array('as'=>'soal.service','uses'=>'SGController@getPaketSoal'));
    Route::post('service/update-soal',array('as'=>'soal.update','uses'=>'SGController@updatePaketSoal'));
    Route::post('service/update-opsi',array('as'=>'opsi.update','uses'=>'SGController@updatePaketSoalOpsi'));

    Route::get('service/pilih-opsi',array('as'=>'pilih.opsi','uses'=>'SGController@pilihOpsi'));
});


//JSON Encode
Route::post('check-email','RegistrationController@getEmail');
Route::post('check-username','RegistrationController@getUsername');
//JSON Encode

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@showLogin'));
Route::post('login', 'AuthController@postLogin');

Route::get('register', array('as' => 'register', 'uses' => 'AuthController@showRegister'));
Route::post('register', 'AuthController@postRegister');


Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'AuthController@confirm'
]);


//Route::get('essay','LombaController@showEssay');
//Route::post('essay','LombaController@postEssay');

Route::get('paper','LombaController@showPaper');
Route::post('paper','LombaController@postPaper');
Route::get('paper/success','LombaController@showSuccess');

Route::get('maintenance',array('as' => 'maintenance', 'uses' => 'AdminController@showMaintenance'));

/*
ujicoba
Route::get('email',function(){

	$view_data = array(
                'nama' => Input::get('username'),
                'confirmation_code' => 1,
            );

	$email_data = array(
	        'recipient' => '12.7012@stis.ac.id',
	        'subject' => 'Welcome to WEB Monitoring Survey PKL54!'
	    );

	Mail::send('emails.verify', $view_data, function($message) use ($email_data) {
                $message->to( $email_data['recipient'] )
                    ->subject('ISCO 2015 | Verify your email address');
            });

});
*/