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
Route::resource('/home/foo', 'FooController')->middleware('auth');
Route::resource('/home/admin', 'AdminController')->middleware('auth');
Route::resource('/home/operator', 'OperatorController')->middleware('auth');
Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@show' ]);
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@process' ]);
Route::get('logout', 'LoginController@logout');
