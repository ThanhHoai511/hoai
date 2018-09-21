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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'category'], function() {
        Route::get('list', 'Admin\AdminCategoryController@index')->name('list');

        Route::get('add', 'Admin\AdminCategoryController@create')->name('add');

        Route::post('add', 'Admin\AdminCategoryController@store');

        Route::get('edit/{id}', 'Admin\AdminCategoryController@edit');

        Route::post('edit/{id}', 'Admin\AdminCategoryController@update');

        Route::get('delete/{id}', 'Admin\AdminCategoryController@destroy');
    });
});
