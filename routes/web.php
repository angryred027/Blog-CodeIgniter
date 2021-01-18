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

Route::get('/', 'PostController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/1', 'UserController@show');

Route::middleware('auth')->group(function () {
    Route::get('me', 'UserController@edit');
    Route::post('me', 'UserController@update')->name('users.update');
});

Route::prefix('posts')->as('posts.')->group(function () {
    // auth が適用される (ログインユーザーのみ許可)
    Route::middleware('auth')->group(function () {
        Route::get('create', 'PostController@create')->name('create');
        Route::post('store', 'PostController@store')->name('store');
        Route::post('{post}/delete', 'PostController@delete')->name('delete');
        Route::post('{post}/reply', 'PostController@reply')->name('reply');

    });

    Route::get('{post}', 'PostController@show')->name('show');
});

Route::middleware('auth')->prefix('bookmarks')->as('bookmarks.')->group(function () {
    Route::get('/', 'BookmarkController@index')->name('index');
    Route::post('{post}', 'BookmarkController@add')->name('add');
    Route::post('{post}/remove', 'BookmarkController@remove')->name('remove');

});
