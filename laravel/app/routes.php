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

/*
 Unauthentication group
*/

Route::group(array('before' => 'guest'), function(){
    Route::get("/login",[
        "as" => "login",
        "uses" => "UsersController@indexAction"
    ]);
    Route::get('/register', [
        "as" => "register",
        "uses" => "UsersController@registershowAction"
    ]);

    /*
    | CSRF Protection group
    */

    Route::group(array('before' => 'csrf' ), function(){
        Route::post('/login', [
            "as" => "login",
            "uses" => "UsersController@loginAction"
        ]); 
        Route::post('/register', [
            "as" => "register",
            "uses" => "UsersController@registerAction"
        ]);
    });
});

/*
| User Route
*/

Route::group(array('prefix' => 'user'), function()
{
    Route::get("/main",[
        "as" => "user/main",
        "uses" => "UsersController@mainAction"
    ]);
    Route::get('/profile', [
        "as" => "profile",
        "uses" => "UsersController@profileAction"
    ]);
    Route::get('/logout', [
        "as" => "logout",
        "uses" => "UsersController@logoutAction"
    ]);
    Route::get('/edit', [
        "as" => "showEditProfile",
        "uses" => "UsersController@editShowAction"
    ]);
    Route::post('/edit', [
        "as" => "editProfile",
        "uses" => "UsersController@editAction"
    ]);
    Route::get('/remove', [
        "as" => "remove-user",
        "uses" => "UsersController@removeShowAction"
    ]);
    Route::post('/remove', [
        "as" => "remove-user",
        "uses" => "UsersController@removeAction"
    ]);
});
// link for visitor to open another profile
Route::get('profile/{username}', [
    "as" => "profile-user",
    "uses" => "UsersController@user"
]);
Route::get('report', [
    "as" => "report",
    "uses" => "ReportController@reportShowAction"
]); 
Route::post('report', [
    "as" => "report",
    "uses" => "ReportController@reportAction"
]);



Route::group(array('prefix' => 'recipe'), function()
{
    Route::get("/create",[
    "as" => "create",
    "uses" => "RecipeController@createShowAction"
    ]);
    Route::post("/create",[
        "as" => "create",
        "uses" => "RecipeController@createAction"
    ]);
    Route::get("/edit",[
    "as" => "edit-recipe",
    "uses" => "RecipeController@createShowAction"
    ]);
    Route::post("/edit",[
        "as" => "edit-recipe",
        "uses" => "RecipeController@createAction"
    ]);
    Route::get("/show/{id}",[
    "as" => "show-recipe",
    "uses" => "RecipeController@showRecipeAction"
    ]);
});
