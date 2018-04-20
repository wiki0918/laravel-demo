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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'IndexController@show');

Route::get('foo', function () {
    $users = DB::select('select * from car');
    var_dump($users);
    return 'Hello World';
});

Route::get('user/{id}', 'UserController@show');
