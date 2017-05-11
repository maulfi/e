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

	public function getNotServedTransaction()
	{
		$data['active_page'] = 'not-served';
		$data['menu'] = $this->getMenu();
		$data['title'] = 'Not Served Transaction';
		$data['notserved'] = DB::table('transaction_not_served')
            ->join('user_admin','transaction_not_served.user_id','=','user_admin.user_id')
            ->join('tbl_barang','transaction_not_served.idbarang','=','tbl_barang.id_barang')
            ->select('transaction_not_served.*','user_admin.fullname','tbl_barang.nama_barang','tbl_barang.description')
            ->get();
		return View::make('user/transaction-ns', $data);
	}

	public function getTransactionOut()
	{
		$data['active_page'] = 'out';
		$data['menu'] = $this->getMenu();
		$data['title'] 		 = 'Transaction Out';
		$data['out'] = DB::table('transaction_out')
			->join('user_admin','transaction_out.user_id','=','user_admin.user_id')
            ->select('transaction_out.*','user_admin.fullname')
            ->get();
		return View::make('user/transaction-out', $data);
	}
}