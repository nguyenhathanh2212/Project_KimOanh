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

Route::namespace('Admin')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function() {
        return redirect()->route('admin.user.index');
    });


    Route::resource('contract', 'ContractController')->names('admin.contract');

    Route::resource('user', 'UserController')->names('admin.user');

    Route::resource('news', 'NewsController')->names('admin.news');

    Route::post('search-news', 'NewsController@search')->name('admin.news.search');

    Route::resource('project', 'ProjectController')->names('admin.project');

    Route::post('search-project', 'ProjectController@search')->name('admin.project.search');

    Route::resource('library', 'LibraryController')->names('admin.library');

    Route::resource('contract', 'ContractController')->names('admin.contract');

    Route::resource('contact', 'ContactController')->names('admin.contact');
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

    Route::post('/add-lien-he', [
        'as' => 'kimoanh.contact.store',
        'uses' => 'ContactController@store', 
    ]);

    Route::get('/tim-kiem', [
        'as' => 'kimoanh.search.index',
        'uses' => 'SearchController@search', 
    ]);
});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/404', function() {
    return view('templates.layout.404');
})->name('404');

Route::get('/403', function() {
    return view('templates.layout.403');
})->name('403');
