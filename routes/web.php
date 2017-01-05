<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * 前台路由
 */
Route::group(['middleware' => ['index', 'lang']], function () {//前台|语言中间件
    //不需要登录就可以看到的
    Auth::routes(); //auth

    //需要登录
    Route::group(['middleware' => 'auth'], function () {//登录中间件
        Route::get('/home', 'HomeController@index');    //个人中心
    });

});

/**
 * 测试路由
 */
Route::group(['prefix' => 'test'], function () {
    Route::any('/', "TestController@index");
    Route::any('/email', "TestController@email");
    Route::any('/arr', "TestController@arr");
    Route::group(['prefix' => 'lang'], function () {
        Route::any('/set', "LangController@setLang");
        Route::any('/get', "LangController@getLang");
        Route::any('/edit', "LangController@editLang");
        Route::any('/del', "LangController@delLang");
        Route::any('/get/{key}', "LangController@lang");
        Route::any('/get/{key}/{type}', "LangController@lang");
    });

});

