<?php

class HomeController extends BaseController {

	

	public function showLogin()
	{
		//show the form
		return View::make('login');
	}

	public function doLogin()
	{
		//process de form
		$rules = array(
			'email'	=>	'required|email', //make sure the email
			'password'	=>	'required|alphaNum|min:4' //password can't less 4 caracters
		);

		//run the validation rules on the inputs form the form
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErros($validator)
				->withInput(Input::except('password'));
		} else {

			//create our user data for the authentication
			$userdata = array(
				'email'	=> Input::get('email'),
				'password'	=>	Input::get('password')
			);

			//attempt to do the login
			if (Auth::attempt($userdata)) {
				
				//validation sucessful!
				//redirect them to secure section or whatever
				return Redirect::to('dash');
				//for now we'll just echo sucess (even though echoing)
				//echo 'Sucesso';
			} else {

				//validation not sucess, send back to form
				return Redirect::to('login')->withErrors('Usuário ou Senha Inválido');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

}
