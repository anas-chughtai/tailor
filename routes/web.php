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

Route::group(['middleware' => 'auth'], function () {

	Route::resource('dashboards','DashboardController');
	Route::resource('customers','CustomerController');
    Route::resource('orders','OrderController');
    Route::resource('salaries','SalaryController');
    Route::resource('staffs','StaffController');

    Route::get('/', 'DashboardController@index');

    Route::get('logout', function (){
        Auth::logout();
        return redirect('/');
    });

    Route::get('password', 'OrderController@password');
    Route::post('password', 'OrderController@updatePassword');

    Route::resource('sizes','SizeController');

    Route::get('kameez_shalwar/{id}/edit', 'SizeController@kameez_shalwar_edit')->name('kameez_shalwar.edit');
    Route::post('kameez_shalwar/{id}/update', 'SizeController@kameez_shalwar_update')->name('kameez_shalwar.update');

    Route::get('kameez_trouser/{id}/edit', 'SizeController@kameez_trouser_edit')->name('kameez_trouser.edit');
    Route::post('kameez_trouser/{id}/update', 'SizeController@kameez_trouser_update')->name('kameez_trouser.update');

    Route::get('shirt/{id}/edit', 'SizeController@shirt_edit')->name('shirt.edit');
    Route::post('shirt/{id}/update', 'SizeController@shirt_update')->name('shirt.update');

    Route::get('two_piece/{id}/edit', 'SizeController@two_piece_edit')->name('two_piece.edit');
    Route::post('two_piece/{id}/update', 'SizeController@two_piece_update')->name('two_piece.update');

    Route::get('three_piece/{id}/edit', 'SizeController@three_piece_edit')->name('three_piece.edit');
    Route::post('three_piece/{id}/update', 'SizeController@three_piece_update')->name('three_piece.update');

    Route::get('pant/{id}/edit', 'SizeController@pant_edit')->name('pant.edit');
    Route::post('pant/{id}/update', 'SizeController@pant_update')->name('pant.update');

    Route::get('waist_coat/{id}/edit', 'SizeController@waist_coat_edit')->name('waist_coat.edit');
    Route::post('waist_coat/{id}/update', 'SizeController@waist_coat_update')->name('waist_coat.update');

    Route::get('coat/{id}/edit', 'SizeController@coat_edit')->name('coat.edit');
    Route::post('coat/{id}/update', 'SizeController@coat_update')->name('coat.update');

    Route::get('prince_coat/{id}/edit', 'SizeController@prince_coat_edit')->name('prince_coat.edit');
    Route::post('prince_coat/{id}/update', 'SizeController@prince_coat_update')->name('prince_coat.update');

    Route::get('sherwani/{id}/edit', 'SizeController@sherwani_edit')->name('sherwani.edit');
    Route::post('sherwani/{id}/update', 'SizeController@sherwani_update')->name('sherwani.update');

    Route::get('safari_suite/{id}/edit', 'SizeController@safari_suite_edit')->name('safari_suite.edit');
    Route::post('safari_suite/{id}/update', 'SizeController@safari_suite_update')->name('safari_suite.update');

});

Route::post('/kameez_shalwar/store', 'SizeController@kameez_shalwar');
Route::post('/kameez_trouser/store', 'SizeController@kameez_trouser');
Route::post('/shirt/store', 'SizeController@shirt');
Route::post('/two_piece/store', 'SizeController@two_piece');
Route::post('/three_piece/store', 'SizeController@three_piece');
Route::post('/waist_coat/store', 'SizeController@waist_coat');
Route::post('/sherwani/store', 'SizeController@sherwani');
Route::post('/coat/store', 'SizeController@coat');
Route::post('/prince_coat/store', 'SizeController@prince_coat');
Route::post('/safari_suite/store', 'SizeController@safari_suite');
Route::post('/pant/store', 'SizeController@pant');