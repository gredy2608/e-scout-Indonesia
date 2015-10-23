<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	//login view
	public function view_login()
	{
		return View::make('login');
	}	

	//singin
	public function postSignIn()
	{		
		$username = Input::get('username');
		$password = Input::get('password');
		$data  = array('username'=>$username, 'password'=>$password);		
		if(Auth::attempt($data, false))	
		{
			if (Auth::user()->active_flag) {
				// Session::put('name',$username);
				// Session::put('idUser',Auth::user()->id);
				// Auth::user()->last_login = new DateTime();
    // 			Auth::user()->save();
				//USER
				if(Auth::user()->role == 'user')			
				{
					Session::put('role', 'user');
					$this->layout = 'layouts.topmenu_sidebar';
					return Redirect::to('/dashboard')->with('message', 'Berhasil login!');			
				}			
				//ADMIN
				else if(Auth::user()->role == 'admin')
				{				
					Session::put('role', 'admin');
					$this->layout = 'layouts.topmenu';
					return Redirect::to('/account')->with('message', 'Berhasil login!');	
				}
				else
				{
					return Redirect::to('/')->with('message', 'Username dan password tidak tepat !');							
				}
			}else{
				Auth::logout();
				Session::flush();
				return Redirect::to('/')->with('message', 'Username dan password tidak tepat !');
			}
			
		}
		else
		{
			return Redirect::to('/')->with('message', 'Username dan password tidak tepat !');					
		}
	}
	
	//logout
	public function postLogout()
	{
		Auth::logout();
		Session::flush();
		return Redirect::to('/')->with('message', 'Berhasil logout!');
	}
}
