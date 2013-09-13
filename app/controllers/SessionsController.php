<?php

class SessionsController extends BaseController
{
    protected $layout = 'layout.master';

	public function index()
	{
		$this->layout->content = View::make('sessions.new');
  		return $this->layout;
	}

	public function create()
	{
		$user = array(
		        'email' => Input::get('email'),
		        'password' => Input::get('password')
		     );

		if (Auth::attempt($user)) {

			Session::flash('success', 'Successfully Logged In');
			return Redirect::route('profile');

		} else {

			// flash error message
			Session::flash('error', 'Invalid email or password');
			return $this->index();

		}
	}

	public function destroy()
	{
		Auth::logout();
		Session::flash('success', 'Successfully Logged Out');

		return Redirect::route('home');
	}

}
