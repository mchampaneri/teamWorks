<?php

class usersController extends \BaseController {

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
 			
 			return Redirect::to('/desk')->with('level', Auth::user()->privilage);
 			
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
		$user = new User();
		$user->email = 'tiger@zoo.com';
		$user->password = Hash::make('1234');
		$user->save();

		return "user ready to access";
	}

	public function store()
	{
		$input = Input::all();
		$user = new User();
		$user->email = $input['email'];
		$user->password = Hash::make($input['password']);
		$user->save();
		echo "<script type=text/javascript> console.log('User stored') </script>";
		return "user ready to access";

	}

	public function index()
	{
		return "index page";
	}
}
