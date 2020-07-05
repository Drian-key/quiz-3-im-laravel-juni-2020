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
    return view('master');
});

Route::get('/artikel', function () {
    return view('master');
});

Route::get('/artikel/create', function () {
    return view('buton');
});

Route::get('/artikel/id', function () {
    return view('tag');
});


