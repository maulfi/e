<?php
	class TNSModel extends Eloquent{
		protected $table = 'transaction_not_served';
		protected $primaryKey = 'id';
		public $timestamps = false;
	}
?>