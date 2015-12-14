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


/*** Ajax Routes ****/
Route::get('/default','userController@makeUser');
Route::get('/projects/current','projectController@current');

Route::post('/projects/recruite','projectController@recruite');
Route::post('/users/available','userController@available');


/* ----------------- Security for Routes -------------------- */

Route::group(array('before' => 'auth'), function(){
		
		Route::resource('users','userController');
		Route::get('/desk',function(){
			return View::make('desk');
		});		

		Route::resource('projects','projectController');	

		Route::resource('members','memberController');	
		
});

