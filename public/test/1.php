<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/8 0008
 * Time: 下午 7:17
 */

Route::get('/', function(){
    return view('welcome');
});

Route::get('about', function(){
    return view('about');
});

Route::get('about', function(){
    return view('products');
});

Route::get('services', function(){
    return view('services');
});

//使用laravel开发静态页面就是这么简单

Route::post('/', funtion(){});
Route::put('/', funciton(){});
Route::delete('/', function(){});

Route::any('/', function(){});
//从安全角度来说,并不推荐上述这种路由定义方式,但是兼顾到便利性,我们可以通过Route::match制定请求方式定义白名单数组,比如下面这个路由可以
//匹配GET或者POST请求

Route::match(['get','post'], '/', function(){});

//复杂业务逻辑处理
//传递闭包并不是定义路由的唯一方式,闭包简单快捷,但是随着应用题量的增长,将提取复杂的业拆分到控制器方法中实现,然后再定义路有的时候使用
//控制器+方法名额取代闭包函数.

Route::get('/', 'WelcomeController@index');
//这段代码的含义是将/请求传给App\Http\Controllers\WelcomeController

Route::get('user/{id}', 'function($id'){

});

Route::group([], function(){
    Route::get('hello', function (){ return 'Hello'});
    Route::get('world', function (){ return 'World';});
});

Route::middleware('auth')->group(function (){
    Route::get('dashboard', function(){
        return view('dashboard');
    });
    Route::get('accout', function (){
        return view('accout');
    });
});

public static $verbs = ['GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'];

Route::get($uri, $callback);
Route::post($url, $callback);
Route::put($url, $callback);
Route::patch($url, $callback);
Route::options($url, $callback);


