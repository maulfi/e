<?php

class Performance extends BaseController {

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

	/*public function showWelcome()
	{
		return View::make('hello');
		// UserController::getIndex();
	}*/

	public function error404()
	{
		return View::make("errors/404");
	}

	public function getIndex()
	{
		$data['active_page'] = 'nHome';
		$data['uac'] = UacModel::skip(0)->take(1000)->get();
		$data['uac'] = DB::table('user_module')
            // ->leftjoin('user_access_control', 'user_access_control.modul_id', '=', 'user_module.modul_id')
            ->leftJoin('user_access_control', function($join)
                         {
                             $join->on('user_access_control.module_id', '=', 'user_module.module_id');
                             $join->on('user_access_control.role','=',DB::raw("'admin'"));
                         })
            ->select('user_module.module_id', 'user_module.module_name','user_access_control.status')
            // ->where('user_access_control.role', '=', 'admin')
            ->get();
		// echo json_encode($data['uac']);die();
		return View::make('user/uac', $data);
	}

	public function getIndex2()
	{
		$data['active_page'] = 'nHome';
		$data['uac'] = UacModel::skip(0)->take(1000)->get();
		$data['uac'] = DB::table('user_module')
            ->leftjoin('user_access_control', 'user_access_control.modul_id', '=', 'user_module.modul_id')
            ->select('user_module.modul_id', 'user_module.modul_name','user_access_control.status')
            ->where('user_access_control.role', '=', 'admin')
            ->get();
		// echo json_encode($uac);
            echo json_encode($uac);die();
		return View::make('user/uac', $data);
	}

}
?>