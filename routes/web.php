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

Route::get('/ss', function () {
    return view('kimoanh.introduce.index');
});
Route::get('s', [
    'as' => 'testNews',
    'uses' => 'HomeController@getLibrariesByType', 
]);
