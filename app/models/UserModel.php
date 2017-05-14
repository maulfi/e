<?php
	class UserModel extends Eloquent{
		protected $table = 'user_admin';
		protected $primaryKey = 'user_id';
		public $timestamps = false;
	}
?>