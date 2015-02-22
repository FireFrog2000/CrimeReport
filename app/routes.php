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

Route::get('/', function()
{
	return View::make('hello');
});


Route::resource('report', 'ReportsController',array('except' => array('')));


Route::group(array("prefix" => "api/v1"),function(){

    Route::resource('report', 'ReportsControllerAPI',array('except' => array('')));
    Route::get('/category',array("as" => "crime.category","uses" =>"ReportsControllerAPI@getCategory" ));
});


Route::get("/signup",array("as"=> "user.signup","uses" => "AccountController@getSignUp"));
Route::post("/signup",array("as"=> "user.signup.post","uses" => "AccountController@postSignUp"));

Route::get("/activate/",array("as" => "user.activate","uses" => "AccountController@getActivate"));
Route::post("/activate/",array("as" => "user.activate.post","uses" => "AccountController@postActivate"));

Route::get("/signin",array("as" => "user.signin","uses" => "AccountController@getSignIn"));
Route::post("/signin",array("as" => "user.signin.post","uses" => "AccountController@postSignIn"));


Route::get('/',function(){
        return View::make('theme.theme2.index');
});

Route::group(array("before" => "auth"),function(){

    Route::get('user/profile',array("as" => "user.profile","uses" => "UserController@getProfile"));
    Route::get('/user/signout',array("as" => "user.signout","uses" => "AccountController@getSignOut"));
});


