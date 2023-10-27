<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware'=>'notlogin'], function (){
    Route::get('/index_on','App\Http\Controllers\AllController@index_on')->name('index');
});


Route::group(['middleware'=>'islogin'], function (){
    Route::get('/','App\Http\Controllers\AllController@login')->name('login');
    Route::post('/login','App\Http\Controllers\AllController@login_on')->name('login_on');
});