<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*Route::get('/', function()
{
	return View::make('hello');
});*/
	Route::filter('session', function(){
		if(!Session::has('user_id'))
			return Redirect::to('login');
	});
 
	Route::filter('session_admin_dashboard', function(){
		if(!Session::has('user_id'))
			return Redirect::to('login-dashboard');
	});

	Route::filter('input', function()
	{
		globalXssClean();
	});

	function globalXssClean()
	{
	    // Recursive cleaning for array [] inputs, not just strings.
	    $sanitized = arrayStripTags(Input::all());
	    Input::merge($sanitized);
	}

	function arrayStripTags($array)
	{
	    $result = array();
	 
	    foreach ($array as $key => $value) {
	        // Don't allow tags on key either, maybe useful for dynamic forms.
	        $key = strip_tags($key);
	 
	        // If the value is an array, we will just recurse back into the
	        // function to keep stripping the tags out of the array,
	        // otherwise we will set the stripped value.
	        if (is_array($value)) {
	            $result[$key] = arrayStripTags($value);
	        } else {
	            // I am using strip_tags(), you may use htmlentities(),
	            // also I am doing trim() here, you may remove it, if you wish.
	            $result[$key] = trim(strip_tags($value));
	        }
	    }
	 
	    return $result;
	}

	App::missing(function(Exception $exception)
	{
	 return App::make('HomeController')->error404();
	});
	
	
	//admin
		Route::post('login/login-admin', array('before' => 'csrf', 'uses' => 'LoginController@postLoginAdmin'));
		Route::controller('login', 'LoginController');

		Route::group(array('before' => 'session_admin'), function(){
			Route::post('admin/news/create-news', array('before' => 'csrf', 'uses' => 'NewsController@postCreateNews'));
			Route::controller('admin/news', 'NewsController');
		});
	//

	//user
		Route::group(array('before' => 'session'), function(){

			Route::controller('user', 'UserController');

			Route::controller('barang', 'BarangController');

			Route::controller('report', 'ReportController');

			Route::controller('message', 'MessageController');

			Route::controller('transaction', 'TransactionController');
			
			Route::controller('home', 'HomeController');
			Route::controller('performance', 'performance');

			Route::controller('/', 'ReportController');
		});
	//

?>