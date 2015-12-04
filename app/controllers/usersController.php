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
 			if( Auth::user()->privilage == 1)
 			{
 				return View::make('desk')->with('level','1');
 			}
 			if( Auth::user()->privilage == 2 )
 			{
 				return View::make('desk')->with('level','2');
 			}
 			else
 			{
 				return View::make('desk')->with('level','3');
 			}
 		}
	}

	public function logout()
	{
		Auth::logout();
		return 'Logout Successfully';

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

}
