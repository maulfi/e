<?php
class MessageController extends BaseController {

	public function getIndex()
	{
		$data['active_page'] = 'plan';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Plan';
		$data['admin'] = DB::table('user_admin')
            ->select('user_id', 'user_name', 'fullname', 'position', 'role', 'insertdate')
            ->get();		
		return View::make('user/messages', $data);
	}
}