<?php
class ReportController extends BaseController {

	public function getIndex()
	{
		return $this->getOverview();
	}

	public function getOverview()
	{
		$data['active_page'] = 'Overview';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Overview';
		$data['admin'] = DB::table('user_admin')
            ->select('user_id', 'user_name', 'fullname', 'position', 'role', 'insertdate')
            ->get();		
		return View::make('user/overview', $data);
	}

	public function getPerformance()
	{
		$data['active_page'] = 'Performance';
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
		$data['plan'] = DB::table('planning')
            ->select('id', 'plan_title', 'profit', 'start', 'end')
            ->get();		
		return View::make('user/plan', $data);
	}

	public function getAddPlan(){
		$data['active_page'] = 'Plan';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Add Plan';

		return View::make('user/plan-input', $data);
	}

	public function postAddPlan()
	{
		$post = Input::all();
		$rules = array(
					'plan_title' => 'required',
					'profit' => 'required',
					'start' => 'required',
					'end' => 'required'
				 );
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes())
		{
			$data = new PlanModel;
			$data->plan_title = $post['plan_title'];
			$data->profit = $post['profit'];
			$data->start = $post['start'];
			$data->end = $post['end'];
			$data->user_id = Session::get('user_id');
	        $data->save();
	        return $this->getPlan();
		}
		View::share('error', $validator->messages());
		View::share('filled', $post);
		return $this->getAddPlan();
	}
}