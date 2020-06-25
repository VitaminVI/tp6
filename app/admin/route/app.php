<?php

use think\facade\Route;

Route::rule('login', 'Index/login');

Route::group('/', function () {
    Route::rule('/', 'Index/index');
    Route::rule('index', 'Index/index');

    Route::rule('dashboard', 'Index/dashboard');
})->middleware(\cc\middleware\Login::class);

//当路由规则都不匹配的话，会路由到`miss`
//写在这里针对的是路由不存在 未匹配到路由
Route::miss(function() {
    return miss('路由不存在');
});
