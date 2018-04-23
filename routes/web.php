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


//首頁,預約清單
Route::get('/', 'IndexController@show');

//發布車型
Route::get('car/announce', 'AdminController@announce');

//儲存車型
Route::post('car/save', 'AdminController@save');

//顧客預約
Route::get('booking/{carId}', 'BookingController@reserve');

//儲存預約
Route::get('booking/save', 'bookingController@save');

//檢視預約
Route::get('booking/list', 'bookingController@list');



