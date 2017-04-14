<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    echo 123;exit;
    return view('welcome');
});




Route::get('admin/code','Admin\LoginController@code');
Route::get('admin/getcode','Admin\LoginController@getcode');
Route::get('admin/quit','Admin\LoginController@quit');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::any('admin/login','Admin\LoginController@login');

});

Route::group(['middleware' => ['admin.login']],function (){
    Route::get('admin/index','Admin\IndexController@index');
    Route::get('admin/info','Admin\IndexController@info');

});
