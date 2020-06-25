<?php

use think\facade\Route;

Route::rule('/', 'Index/index');


Route::group('/', function () {
    Route::rule('dashboard', 'Index/dashboard');
})->middleware(\cc\middleware\Login::class);

//当路由规则都不匹配的话，会路由到`miss`
Route::miss(function() {
    return miss();
});
