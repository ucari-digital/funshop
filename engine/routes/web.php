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
    return view('page.index');
});

Route::get('official', function(){
    return view('page.official-partner');
});

Route::get('titanium', function(){
    return view('page.titanium');
});

Route::get('detail', function () {
    return view('page.detail-product');
});
