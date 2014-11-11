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

Route::get('/',["uses" => 'SiteController@indexAction']);
//[skeleton]/app/controllers/SiteController.php

Route::group(array('prefix' => 'user'), function()
{
    Route::get("/main",[
        "as" => "user/main",
        "uses" => "UsersController@mainAction"
    ]);
    Route::get("/login",[
        "as" => "login",
        "uses" => "UsersController@indexAction"
    ]);
    Route::post('/login', [
        "as" => "login",
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
        "as" => "register",
        "uses" => "UsersController@registerAction"
    ]);
    Route::get('/logout', [
        "as" => "logout",
        "uses" => "UsersController@logoutAction"
    ]);
    Route::get('/edit', [
        "as" => "editProfile",
        "uses" => "UsersController@editAction"
    ]);
});

Route::get('report', [
    "as" => "report",
    "uses" => "ReportController@reportShowAction"
]); 
Route::post('report', [
    "as" => "report",
    "uses" => "ReportController@reportAction"
]);
Route::get("recipe/create",[
    "as" => "create",
    "uses" => "RecipeController@createShowAction"
]);
