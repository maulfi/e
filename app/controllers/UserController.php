<?php
class UserController extends BaseController {

	public function getIndex()
	{
		return Redirect::to('user/data-user');
	}

	public function getUserData()
	{
		$data['active_page'] = 'user-admin';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'User Admin';
		$data['admin'] = DB::table('user_admin')
            ->select('user_id', 'user_name', 'fullname', 'position', 'role', 'insertdate')
            ->get();
		return View::make('user/user_admin', $data);
	}

	public function getUserAccessControl()
	{
		$data['active_page'] = 'uac';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'User Access Controll';		
		$data['uac'] = DB::table('user_module')            
            ->leftJoin('user_access_control', function($join)
                         {
                             $join->on('user_access_control.module_id', '=', 'user_module.module_id');
                             $join->on('user_access_control.role','=',DB::raw("'admin'"));
                         })
            ->select('user_module.module_id', 'user_module.module_name','user_access_control.status')
            ->get();
		return View::make('user/uac', $data);
	}
}