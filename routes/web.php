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
    return view('auth.login');
})->name('index');

Route::get('/coffee', function(){
    return view('client.index');
})->name('client')->middleware('auth');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role']], function() {
    Route::group(['prefix' => 'category'], function() {
        Route::get('list', 'Admin\AdminCategoryController@index')->name('listCategory');
        Route::get('add', 'Admin\AdminCategoryController@create')->name('addCategory');
        Route::post('add', 'Admin\AdminCategoryController@store');
        Route::get('edit/{id}', 'Admin\AdminCategoryController@edit');
        Route::post('edit/{id}', 'Admin\AdminCategoryController@update');
        Route::get('delete/{id}', 'Admin\AdminCategoryController@destroy');
    });

    Route::group(['prefix' => 'product'], function() {
        Route::get('list', 'Admin\AdminProductController@index')->name('listProduct');
        Route::get('add', 'Admin\AdminProductController@create')->name('addProduct');
        Route::post('add', 'Admin\AdminProductController@store');
        Route::get('edit/{id}', 'Admin\AdminProductController@edit');
        Route::post('edit/{id}', 'Admin\AdminProductController@update');
        Route::get('delete/{id}', 'Admin\AdminProductController@destroy');
    });

    Route::group(['prefix' => 'slide'], function() {
        Route::get('list', 'Admin\AdminSlideController@index')->name('listSlide');
        Route::get('add', 'Admin\AdminSlideController@create')->name('addSlide');
        Route::post('add', 'Admin\AdminSlideController@store');
        Route::get('edit/{id}', 'Admin\AdminSlideController@edit');
        Route::post('edit/{id}', 'Admin\AdminSlideController@update');
        Route::get('delete/{id}', 'Admin\AdminSlideController@destroy');
    });
    Route::get('/editPass', 'Auth\ChangePasswordController@edit')->name('editPass');
    Route::put('/updatePass', 'Auth\ChangePasswordController@update')->name('updatePass');

}); 

Auth::routes();

Route::group(['prefix' => '', 'middleware' => ['role']], function() {
    Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
});

