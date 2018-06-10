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

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index', 
]);

Route::namespace('KimOanh')->group(function () {
    Route::get('/tin-tuc', [
        'as' => 'kimoanh.news.index',
        'uses' => 'NewsController@index', 
    ]);

    Route::get('/tin-tuc/{name}.{id}', [
        'as' => 'kimoanh.news.show',
        'uses' => 'NewsController@show', 
    ]);

    Route::get('/tin-tuc/detail/{name}.{id}', [
        'as' => 'kimoanh.news.detail',
        'uses' => 'NewsController@detail', 
    ]);

    Route::get('/du-an/{name}.{id}', [
        'as' => 'kimoanh.project.show',
        'uses' => 'ProjectController@show', 
    ]);

    Route::get('/du-an/detail/{name}.{id}', [
        'as' => 'kimoanh.project.detail',
        'uses' => 'ProjectController@detail', 
    ]);

    Route::get('/thu-vien/{name}.{id}', [
        'as' => 'kimoanh.library.show',
        'uses' => 'LibraryController@show', 
    ]);

    Route::get('/gioi-thieu', [
        'as' => 'kimoanh.introduce.index',
        'uses' => 'IntroduceController@index', 
    ]);

    Route::get('/lien-he', [
        'as' => 'kimoanh.contact.index',
        'uses' => 'ContactController@index', 
    ]);
});
