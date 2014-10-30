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

//Route::get('/', function()
//{
//	return View::make('hello');
//});

Route::get('/','SiteController@indexAction');
//[skeleton]/app/controllers/SiteController.php

Route::get("user",[
    "as" => "users/main",
    "uses" => "UsersController@mainAction"
]);
  
Route::get("user/login",[
    "as" => "users/index",
    "uses" => "UsersController@indexAction"
]);
 
Route::post('user/login', [
    "as" => "users/login",
    "uses" => "UsersController@loginAction"
]);
 
Route::get('user/profile', [
    "as" => "users/profile",
    "uses" => "UsersController@profileAction"
]);

Route::get('user/register', [
    "as" => "users/register",
    "uses" => "UsersController@registershowAction"
]);
 
Route::post('user/register', [
    "as" => "users/register",
    "uses" => "UsersController@registerAction"
]);