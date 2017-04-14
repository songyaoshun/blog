<?php


Route::group(['middleware' => ['web'],'prefix'=>'admin','namespace'=>'admin'], function () {
    Route::any('login','LoginController@login');
    Route::get('code','LoginController@code');
    Route::get('getcode','LoginController@getcode');
});

Route::group(['middleware' => ['web','admin.login'],'prefix'=>'admin','namespace'=>'admin'],function (){
    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');
    Route::get('quit','LoginController@quit');
});
