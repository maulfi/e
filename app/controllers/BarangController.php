<?php
class BarangController extends BaseController {
	public function error404()
	{
		return View::make("errors/404");
	}

	public function getDataBarang()
	{
		$data['active_page'] = 'data barang';
		$data['menu'] = $this->getMenu();
		$data['title'] 		 = 'Data Barang';
		$data['barang']		 = 	DB::table('tbl_barang')
								->leftjoin('user_admin', 'user_admin.user_id', '=', 'tbl_barang.admin_id')
								->select('id_barang', 'jenis_barang', 'operator_id', 'nama_barang', 'description', 'nominal', 'price', 'baseprice', 'stock', 'multi_stock', 'chip_stock', 'created_at', 'updated_at', 'admin_id', 'status','user_admin.fullname')
								->get();
		return View::make('user/barang', $data);
	}

	public function getAddBarang()
	{
		$data['active_page'] = 'data barang';
		$data['menu'] = $this->getMenu();
		$data['title'] 		 = 'Data Barang';
		return View::make('user/barang-input', $data);
	}

	public function postAddBarang()
	{
		$post = Input::all();

		// echo Session::get('user_id');die();
		$rules = array(
					'jenis_barang' => 'required',
					'nama_barang' => 'required',
					'operator' => 'required',
					'description' => 'required',
					'stock' => 'required',
					'multi_stock' => 'required',
					'nominal' => 'required',
					'price' => 'required',
					'base_price' => 'required',
					'chip_stock' => 'required'
				 );
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes())
		{
			$barang = new BarangModel;
			$barang->jenis_barang = $post['jenis_barang'];
			$barang->nama_barang = $post['nama_barang'];
			$barang->operator_id = $post['operator'];
			$barang->description = $post['description'];
			$barang->stock = $post['stock'];
			$barang->multi_stock = $post['multi_stock'];
			$barang->nominal = $post['nominal'];
			$barang->price = $post['price'];
			$barang->baseprice = $post['base_price'];
			$barang->chip_stock = $post['chip_stock'];
			$barang->created_at = date('Y-m-d H:i:s');
			$barang->admin_id = Session::get('user_id');
			$barang->save();
			return $this->getDataBarang();
		}
		View::share('error', $validator->messages());
		View::share('filled', $post);
		return $this->getAddBarang();
	}
}
?>