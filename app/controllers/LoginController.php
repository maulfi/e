<?php
class LoginController extends BaseController {
	public function getIndex()
	{
		return Redirect::to('login/login-admin');
	}
	
	public function getLoginAdmin()
	{
		return View::make('admin/login_view');
	}

	public function postLoginAdmin()
	{
		$post = Input::all();
		$cek_user = User::where('user_name' ,'=', $post['email'])->where('password', '=', md5($post['password'].Config::get('constant.key')))->first();
		if($cek_user != null)
		{
			Session::put('user_id', $cek_user->user_id);
			return Redirect::to('/');
		}
		else
		{
			View::share('error', 'Invalid email or password');
			return $this->getLoginAdmin();
		}
	}

	public function getLogout()
	{
		Session::flush();
		return Redirect::to('login');
	}
}