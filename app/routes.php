<?php

Route::get('/', function(){
	return View::make('login');
});

/* ----------  Security Routiens *****************- */


Route::get('/login',function(){
	return View::make('login');
});
Route::get('/logout',['as'=>'logout','uses'=>'userController@logout']);



/********** Authenticator **********/

Route::post('/login',['as'=>'authenticate','uses'=>'userController@authenticator']);
Route::get('/default','userController@makeUser');


/* ----------------- Security for Routes -------------------- */

Route::group(array('before' => 'auth'), function(){
		
		Route::resource('users','userController');
		Route::resource('projects','projectController');
		Route::get('/desk',function(){
			return View::make('desk');
		});

		Route::resource('members','memberController');	
		
});

