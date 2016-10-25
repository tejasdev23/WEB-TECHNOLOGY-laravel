<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*Route::get('/',function(){

	//$users=DB::table('myDB.Users')->where('id','=',1)->get();
	$users= DB::select('select * from Users where id=1');
	
	
	return $users;
 	
});
*/

use Illuminate\Http\Request;
Route::get('/postaquestion','postController@page');

Route::post('/postthat','postController@enterdata');
Route::post('/put','Usercontroller@putdata');

Route::get('/logout','Usercontroller@logout');	
Route::get('/',['as' => 'home','uses' => 'Usercontroller@index']);
Route::get('/index','Usercontroller@index');


Route::get('/afterlogin','Usercontroller@afterlogin');


Route::get('/mysubmissions','Usercontroller@mysubmissions');


Route::get('/startprojects','Usercontroller@startprojects');


Route::get('/givechallenge','Usercontroller@givechallenge');

Route::post('/pushformdata','Probscontroller@pushformdata');


Route::get('/projectstheme1',function()
{

	return view('projectstheme1');
});

Route::get('/project1',function(){

	return view('project1');

});

//Route::get('/giveproblems','Usercontroller@pushformdata');



Auth::routes();

Route::get('/home', 'HomeController@index');
