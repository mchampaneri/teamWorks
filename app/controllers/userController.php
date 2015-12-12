<?php

class userController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$users = User::all();		
		return $users;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/****** Data From Ajax Request *********/
		$email = Input::get('email');		
	   	$password = Input::get('password');
	   	$name = Input::get('name');
	   	$privilage = Input::get('privilage');

	   	/****** New User *********/
	   	$new_user = new User();
	   	$new_user->name = $name;
	   	$new_user->privilage = $privilage;
	   	$new_user->email = $email;
	   	$new_user->password = Hash::make($password);
	   	$new_user->save();

	   	/***** Ajax Response for console ********/	  
		return "user ready to access";

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function authenticator()
	{
 		$input = Input::all();	

 		$validator = Validator::make(
 					$input,
 					array(
 						'password' => 'required|min:4',
        				'email' => 'required|email'
 					)
 			);
 	
	 	if( $validator->fails())
	 	{
	 		return Redirect::back()->withInput()->withErrors($validator->messages());
	 	}
 		if( Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))
 		{
 			
 			return Redirect::to('/desk');
 			
 		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');

	}
/* --------- For returnig to the intial Setting s ------ */
	public function makeUser()
	{
		$userDel = User::where('email','=','tiger@zoo.com')->delete();
		
		$user = new User();
		$user->email = 'tiger@zoo.com';
		$user->password = Hash::make('1234');
		$user->privilage= 1;
		$user->save();

		return $userDel;
	}




}
