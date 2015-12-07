<?php

Route::get('/', function(){
	return View::make('login');
});

/* ----------  Security Routiens *****************- */


Route::get('/login',function(){
	return View::make('login');
});
Route::get('/logout',['as'=>'logout','uses'=>'usersController@logout']);



/********** Authenticator **********/

Route::post('/login',['as'=>'authenticate','uses'=>'usersController@authenticator']);
Route::get('/default','usersController@makeUser');

Route::get('/desk',function(){
			return View::make('desk');
		});

/* ----------------- Security for Routes -------------------- */

Route::group(array('before' => 'auth'), function(){
		Route::resource('tasks','tasksController');
		Route::resource('projects','projectsController');
		Route::resource('users','usersController');		
		
});

