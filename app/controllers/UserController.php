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

	public function getAddUser(){
		$data['active_page'] = 'user-admin';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Add User Admin';

		return View::make('user/user_admin-input', $data);
	}

	public function postAddUser()
	{
		$post = Input::all();
		$rules = array(
					'position' => 'required',
					'username' => 'required',
					'fullname' => 'required',
					'password' => 'required',
					'avatar' => 'required'
				 );
		$validator = Validator::make(Input::all(), $rules);
		$dest_path = "assets/images/users/"; 
		if($validator->passes())
		{
			$data = new UserModel;
			$data->position = $post['position'];
			$data->user_name = $post['username'];
			$data->fullname = $post['fullname'];
			$data->password = md5($post['password'].Config::get('constant.key'));
			$data->insertdate = date('Y-m-d H:i:s');
			$data->role = str_replace(' ', '-', strtolower($post['position']));
			//$data->avatar = date('YmdHis').".jpg";
			if(Input::file())
	        {	  
	            $image = Input::file('avatar');
	            $filename  = time() . '.' . $image->getClientOriginalExtension();
	            $path = public_path($dest_path . $filename);
	            Image::make($image->getRealPath())->resize(200, 200)->save($path);
	            $data->avatar = $filename;
	        }
	        $data->save();
	        return $this->getUserData();
		}
		View::share('error', $validator->messages());
		View::share('filled', $post);
		return $this->getAddUser();
	}

	public function getUpdateUser(){
		$data['active_page'] = 'user-admin';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Update User Admin';
		return View::make('user/user_admin-input', $data);
	}

	public function postUpdateUser()
	{
		$post = Input::all();
		$rules = array(
					'position' => 'required',
					'username' => 'required',
					'fullname' => 'required',
					'password' => 'required',
					'avatar' => 'required'
				 );
		$validator = Validator::make(Input::all(), $rules);
		$dest_path = "assets/images/users/"; 
		if($validator->passes())
		{
			$data = new UserModel;
			$data->position = $post['position'];
			$data->user_name = $post['username'];
			$data->fullname = $post['fullname'];
			$data->password = md5($post['password'].Config::get('constant.key'));
			$data->insertdate = date('Y-m-d H:i:s');
			$data->role = str_replace(' ', '-', strtolower($post['position']));
			if(Input::file())
	        {	  
	            $image = Input::file('avatar');
	            $filename  = time() . '.' . $image->getClientOriginalExtension();
	            $path = public_path($dest_path . $filename);
	            Image::make($image->getRealPath())->resize(200, 200)->save($path);
	            $data->avatar = $filename;
	        }
	        $data->save();
	        return $this->getUserData();
		}
		View::share('error', $validator->messages());
		View::share('filled', $post);
		return $this->getUpdateUser();
	}

	public function getUserAccessControl($role="admin")
	{
		$data['active_page'] = 'uac';
		$data['role'] = DB::table('user_admin')
           ->select('role')
           ->groupby('role')
           ->get();
        $role_list = array();

        if($data['role']){
        	foreach ($data['role'] as $d){
        		$role_list[]=$d->role;
        	} 
        }
        if(in_array($role, $role_list)){
        	$data['selectedrole'] = $role;
			$data['menu'] = $this->getMenu();
			$data['title'] = 'User Access Controll';
			$data['uac'] = DB::table('user_module')
	            ->leftJoin('user_access_control', function($join)
	                         {
	                             $join->on('user_access_control.module_id', '=', 'user_module.module_id');
	                             $join->on('user_access_control.role','=',DB::raw("?"));
	                         })
	            ->select('user_module.module_id', 'user_module.module_name','user_access_control.status')
	            ->orderby('user_module.module_id')
	            ->setBindings([$role])	            
            	->get();
			return View::make('user/uac', $data);
		}else{
			return View::make('errors/404');
		}
	}

	public function postUserAccessControl($role="")
	{
		$post = Input::all();
		$data['role'] = DB::table('user_admin')
           ->select('role')
           ->groupby('role')
           ->get();
        $role_list = array();
        
        if($data['role']){
        	foreach ($data['role'] as $d){
        		$role_list[]=$d->role;
        	} 
        }
        if(in_array($role, $role_list)){
			$data = new UACModel;
			$data->where('role', '=', "$role")->delete();
			if($post['role_id']){
				foreach ($post['role_id'] as $r) {
					$data = new UACModel;
					$data->role  = $role;
					$data->module_id = $r;
					$data->status = 'active';
				    $data->save();
				}
			}
		}
		return $this->getUserAccessControl($role);
	}
}