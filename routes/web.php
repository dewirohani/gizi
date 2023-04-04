<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/detail', function () {
    return view('detail');
});
Route::get('/detail1', function () {
    return view('detail1');
});
Route::get('/detail2', function () {
    return view('detail2');
});
Route::get('/detail1', function () {
    return view('detail1');
});
Route::get('/detail1', function () {
    return view('detail1');
});
Route::get('/detail1', function () {
    return view('detail1');
});
