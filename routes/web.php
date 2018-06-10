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

Route::get('/admin', function(){
    return View('admin.user.edit');
});

Route::namespace('KimOanh')->group(function () {
    Route::get('/tin-tuc', [
        'as' => 'kimoanh.news.index',
        'uses' => 'NewsController@index', 
    ]);

    Route::get('/tin-tuc/{name}.{id}', [
        'as' => 'kimoanh.news.show',
        'uses' => 'NewsController@show', 
    ]);

    Route::get('/tin-tuc/dettail/{name}.{id}', [
        'as' => 'kimoanh.news.detail',
        'uses' => 'NewsController@detail', 
    ]);
});
