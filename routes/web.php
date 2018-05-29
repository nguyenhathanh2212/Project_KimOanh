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

Route::get('/s', function () {
    return view('kimoanh.project.index');
});
Route::namespace('KimOanh')->group(function () {
	Route::resource('news', 'NewsController', [
        'as' => 'kimoanh'
    ]);
    Route::post('news/', [
        'as' => 'kimoanh.news',
        'uses' => 'NewsController@index', 
    ]);
    Route::get('news/detail/{id}', [
        'as' => 'kimoanh.news.detail',
        'uses' => 'NewsController@show', 
    ]);
});
