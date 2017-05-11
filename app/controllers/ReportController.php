<?php
class ReportController extends BaseController {

	public function getIndex()
	{
		return $this->getOverview();
	}

	public function getOverview()
	{
		$data['active_page'] = 'overview';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Overview';
		$data['admin'] = DB::table('user_admin')
            ->select('user_id', 'user_name', 'fullname', 'position', 'role', 'insertdate')
            ->get();		
		return View::make('user/overview', $data);
	}

	public function getPerformance()
	{
		$data['active_page'] = 'performance';
		$data['title'] = 'Performance';
		$data['menu'] = $this->getMenu();
		$data['admin'] = DB::table('user_admin')
            ->select('user_id', 'user_name', 'fullname', 'position', 'role', 'insertdate')
            ->get();		
		return View::make('user/performance', $data);
	}

	public function getPlan()
	{
		$data['active_page'] = 'plan';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Plan';
		$data['admin'] = DB::table('user_admin')
            ->select('user_id', 'user_name', 'fullname', 'position', 'role', 'insertdate')
            ->get();		
		return View::make('user/plan', $data);
	}
}