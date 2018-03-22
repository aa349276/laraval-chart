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


Route::get('/todo','MytestController@QQQ');
Route::post('/todo','MytestController@UUU');
Route::delete('/todo/{iD}','MytestController@DDD');
Route::get('/todo/{iD}/edit','MytestController@Edit');
Route::PUT('/todo/{iD}/update','MytestController@update');

//---------------------- Chart test

Route::get('/chart','MyChartController@chart');
Route::get('/chart/list','MyChartController@show');
