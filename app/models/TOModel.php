<?php
	class TOModel extends Eloquent{
		protected $table = 'transaction_out';
		protected $primaryKey = 'id';
		public $timestamps = false;
	}
?>