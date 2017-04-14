<?php


Route::group(['middleware' => ['web'],'prefix'=>'admin','namespace'=>'Admin'], function () {
    Route::any('login','LoginController@login');
    Route::get('code','LoginController@code');
    Route::get('getcode','LoginController@getcode');
});

Route::group(['middleware' => ['admin.login'],'prefix'=>'admin','namespace'=>'Admin'],function (){
    Route::get('index','IndexController@index');
    Route::get('info','IndexController@info');
    Route::get('quit','LoginController@quit');
});
