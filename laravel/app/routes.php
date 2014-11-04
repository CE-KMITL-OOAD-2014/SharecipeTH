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
  

Route::group(array('prefix' => 'user'), function()
{

    Route::get("/login",[
        "as" => "users/index",
        "uses" => "UsersController@indexAction"
    ]);
     
    Route::post('/login', [
        "as" => "users/login",
        "uses" => "UsersController@loginAction"
    ]);
     
    Route::get('/profile', [
        "as" => "profile",
        "uses" => "UsersController@profileAction"
    ]);

    Route::get('/register', [
        "as" => "register",
        "uses" => "UsersController@registershowAction"
    ]);
     
    Route::post('/register', [
        "as" => "users/register",
        "uses" => "UsersController@registerAction"
    ]);

    Route::get('/logout', [
        "as" => "logout",
        "uses" => "UsersController@logoutAction"
    ]);
});


