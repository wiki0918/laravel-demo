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

//登入
Route::get('admin/login', 'AdminController@login');
Route::post('admin/signup', 'AdminController@signup');

//登出
Route::get('admin/logout', 'AdminController@logout');

//發布車型
Route::get('car/announce', 'AdminController@announce');

//儲存車型
Route::post('car/save', 'AdminController@save');

//顧客預約
Route::get('booking/car/{carId}', 'BookingController@reserve');

//儲存預約
Route::post('booking/save', 'BookingController@save');

//檢視預約list
Route::get('booking/list', 'BookingController@bookingList');

//檢視預約的資料
Route::get('booking/date', 'BookingController@bookingListByDate');

//預約的資料(json)
Route::get('booking/json', 'BookingController@jsonListByDate');




