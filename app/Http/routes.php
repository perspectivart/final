<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(["middleware"=>["web"]],function(){
	         // show landing page
			Route::get('/', function () {
				return view('welcome');
			});
			
			
			// show admin home but kwanza aone log in alafu page hizo zingine update na ajax
			Route::get('/admin/home',"Admin@showlog");
			
             //set admin email & password
			 Route::get("/admin/set","Admin@setpass");
			 //save admin details
			 Route::post("/admin/save","Admin@save_details");

			

			// log in admin
			Route::post('/admin/login',"UserAuth@authenticate");


			//log out
			Route::get('/admin/logout',"UserAuth@logout");

			//save subscribers
			Route::post('/subscribe',"MailList@sub");
			//save posts
			Route::post("/admin/save/post","post@post_save");

			//view posts
			Route::get('/admin/view/post',"post@view_post");

			//send mails
			//Route::get('/admin/send/mail',"UserAuth@authenticate");

			Route::auth();

			//Route::get('/home', 'HomeController@index');
	
	    
});
