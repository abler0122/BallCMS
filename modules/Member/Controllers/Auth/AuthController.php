<?php namespace  Modules\Member\Controllers\Auth;

use Modules\Member\Controllers\BaseController;

class AuthController extends BaseController
{
	public function index()
	{
		return view('Modules\Member\Views\welcome_message');
	}

	public function login()
	{
		return view('Modules\Member\Views\login');
	}
}
