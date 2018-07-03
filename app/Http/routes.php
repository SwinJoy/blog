<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/view', function () {
//    return view('my_laravel');
//});
Route::get('/view','ViewController@index');

//Route::get('/hd', function () {
//    return view('welcome');
//});
//
//Route::get('user/{id}', function ($id) {
//    return "User".$id;
//})->where('id','[0-9]+');

//Route::get('test1','Admin\IndexController@index');

//Route::get('user',['as'=>'profile',function(){
//    echo route('profile'); //http://blog.hd/user
//    return "<h1>命名路由</h1>";
//}]);

Route::get('layouts','ViewController@layouts');

Route::get('test1',[
    'as'=>'profile','uses'=>'Admin\IndexController@index'
]);

Route::get('test','Admin\IndexController@index')->name('profile');

//Route::get('admin/login','Admin\IndexController@login');
//Route::get('admin/index','Admin\IndexController@index');

Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['web','admin.login']],function(){
    //Route::get('login','IndexController@login');
    Route::get('index','IndexController@index');
    Route::resource('article','ArticleController');
});

Route::group(['middleware'=>['web']],function(){
    Route::get('admin/login','Admin\IndexController@login');
    Route::get('/', function () {
        session(['key'=>'123']);
        return view('welcome');
    });
    Route::get('/test', function () {
        echo session('key');
        return '<h1>session</h1>';
    });
});