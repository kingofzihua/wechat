<?php

use Illuminate\Routing\Router;

Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => Admin::controllerNamespace(),
    'middleware' => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('users', UserController::class);//用户管理
    $router->resource('article', ArticleController::class);//文章管理
    $router->resource('wechat/menu', Wechat\MenuController::class);//微信菜单

});
