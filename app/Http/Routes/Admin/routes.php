<?php

/**
 * 设置后台的路由规则
 * 本后台系统的权限规则依靠 路由别名  操作方法
 *
 * 所有关于admin的路由全部在此操作
 */
Route::group(['prefix' => 'admin', 'as' => 'admin::'], function () {

    //权限管理路由
    require  __DIR__.'/Index.php';
    require  __DIR__.'/permission.php';


});