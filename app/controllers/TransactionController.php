<?php
class TransactionController extends BaseController {
	public function getIndex()
	{
		return Redirect::to('transaction/served');
	}

	public function getServedTransaction()
	{
		$data['active_page'] = 'served';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Served Transaction';
		$data['served'] = DB::table('transaction_data')
            ->join('user_admin','transaction_data.user_id','=','user_admin.user_id')
            ->join('tbl_barang','transaction_data.id_barang','=','tbl_barang.id_barang')
            ->select('transaction_data.*','user_admin.fullname','tbl_barang.nama_barang','tbl_barang.description')
            ->get();
		return View::make('user/transaction', $data);
	}

	public function getAddServedTransaction(){
		$data['active_page'] = 'Served Transaction';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Add Transaction Served';

		return View::make('user/transaction-input', $data);
	}

	public function postAddServedTransaction()
	{
		$post = Input::all();
		$rules = array(
					'jb' => 'required',
					'nohp' => 'required',
					'qty' => 'required',
				 );
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes())
		{
			$data = new TSModel;
			$data->jenis_barang = $post['jb'];
			$data->no_handphone = $post['nohp'];
			$data->qty = $post['qty'];
			$data->createdate = date('Y-m-d H:i:s');
			$data->status = 'Active';
			$data->user_id = Session::get('user_id');
	        $data->save();
	        return $this->getServedTransaction();
		}
		View::share('error', $validator->messages());
		View::share('filled', $post);
		return $this->getAddServedTransaction();
	}

	public function getNotServedTransaction()
	{
		$data['active_page'] = 'Not Served Transaction';
		$data['p_active'] = 'Not Served Transaction';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Not Served Transaction';
		$data['notserved'] = DB::table('transaction_not_served')
            ->join('user_admin','transaction_not_served.user_id','=','user_admin.user_id')
            ->join('tbl_barang','transaction_not_served.idbarang','=','tbl_barang.id_barang')
            ->select('transaction_not_served.*','user_admin.fullname','tbl_barang.nama_barang','tbl_barang.description')
            ->get();
		return View::make('user/transaction-ns', $data);
	}

	public function getAddNotServedTransaction(){
		$data['active_page'] = 'Not Served Transaction';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Add Transaction Not Served';

		return View::make('user/transaction-ns-input', $data);
	}

	public function postAddNotServedTransaction()
	{
		$post = Input::all();
		$rules = array(
					'jb' => 'required',
					/*'nb' => 'required',*/
					'reason' => 'required',
					'qty' => 'required'
				 );
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes())
		{
			$data = new TNSModel;
			$data->jenis_barang = $post['jb'];
			/*$data->nama_barang = $post['nb'];*/
			$data->reason = $post['reason'];
			$data->qty = $post['qty'];
			$data->createdate = date('Y-m-d H:i:s');
			$data->status = 'Active';
			$data->user_id = Session::get('user_id');
	        $data->save();
	        return $this->getNotServedTransaction();
		}
		View::share('error', $validator->messages());
		View::share('filled', $post);
		return $this->getAddNotServedTransaction();
	}

	public function getTransactionOut()
	{
		$data['active_page'] = 'Transaction Out';
		$data['menu'] = $this->getMenu();
		$data['title'] 		 = 'Transaction Out';
		$data['out'] = DB::table('transaction_out')
			->join('user_admin','transaction_out.user_id','=','user_admin.user_id')
            ->select('transaction_out.*','user_admin.fullname')
            ->get();
		return View::make('user/transaction-out', $data);
	}

	public function getAddTransactionOut(){
		$data['active_page'] = 'user-admin';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Add Transaction Out';

		return View::make('user/transaction-out-input', $data);
	}

	public function postAddTransactionOut()
	{
		$post = Input::all();
		$rules = array(
					'jp' => 'required',
					'title' => 'required',
					'desc' => 'required',
					'total' => 'required'
				 );
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes())
		{
			$data = new TOModel;
			$data->jenis_pengeluaran = $post['jp'];
			$data->title = $post['title'];
			$data->description = $post['desc'];
			$data->total = $post['total'];
			$data->date = date('Y-m-d H:i:s');
			$data->status = 'active';
			$data->user_id = Session::get('user_id');
	        $data->save();
	        return $this->getTransactionOut();
		}
		View::share('error', $validator->messages());
		View::share('filled', $post);
		return $this->getAddTransactionOut();
	}

}