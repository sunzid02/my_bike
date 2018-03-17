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
    return redirect()->route('amount.index');
});

Route::get('/amount', 'AmountController@index')->name('amount.index');
Route::post('/amount', 'AmountController@insert')->name('amount.insert');

Route::get('/info_all', 'AmountController@info')->name('amount.info');

// delete
Route::post('/info_delete', 'AmountController@delete')->name('amount.delete');

//search by date information
Route::post('/by_date', 'AmountController@searchByDate')->name('amount.searchByDate');
Route::get('/by_date', 'AmountController@searchByDate')->name('amount.searchByDate');
