<?php
	class TSModel extends Eloquent{
		protected $table = 'transaction_data';
		protected $primaryKey = 'id';
		public $timestamps = false;
	}
?>