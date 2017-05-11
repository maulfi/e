<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function __construct()
    {

    }

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	protected function getMenu()
	{
		if(Session::has('user_id'))
		{
			$menu = DB::table('user_module')            
            ->leftJoin('user_access_control','user_access_control.module_id', '=', 'user_module.module_id')
			->leftjoin('user_admin', 'user_admin.role', '=', 'user_access_control.role')
            ->select('user_module.icon','user_module.is_have_child','user_module.module_controllers','user_module.module_id', 'user_module.module_name','user_access_control.status', 'user_module.position' , 'user_module.parent_id' )
			->where('user_id', '=', Session::get('user_id'))
			->orderBy('user_module.position','ASC')
			->orderBy('user_module.module_id','ASC')
            ->get();
			// echo json_encode($menu);die;
			return $menu;
		}		
	}
}