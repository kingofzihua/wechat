<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//!!!!!!!!默认增加api前缀

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');
//微信消息api
Route::any('/wechat', 'Api\WechatController@serve')->middleware('wechat');