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
Auth::routes();

Route::get('/', 'HomeController@index')->name('welcome');

// Route::middleware(['auth'])->group(function () {

// 	Route::resource('admin.seller.product','ProductController');


// });

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function (){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider','SliderController');
    Route::resource('category','CategoryController');
    Route::resource('product','ProductController');
    Route::resource('users','UserController');
    Route::resource('roles','RoleController');


    Route::post('product/{id}','ProductController@check')->name('product.check');

    // Route::get('reservation','ReservationController@index')->name('reservation.index');
    // Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
    // Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');
    // Route::get('contact','ContactController@index')->name('contact.index');
    // Route::get('contact/{id}','ContactController@show')->name('contact.show');
    // Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');

    // Route::get('roles', 'RoleController@index')->name('roles.index')
	// 	->middleware('can:roles.index');
});

