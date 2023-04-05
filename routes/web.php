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
Route::get('/detail3', function () {
    return view('detail3');
});
Route::get('/detail4', function () {
    return view('detail4');
});
Route::get('/detail5', function () {
    return view('detail5');
});
Route::get('/detail6', function () {
    return view('detail6');
});
Route::get('/detail7', function () {
    return view('detail7');
});
Route::get('/detail8', function () {
    return view('detail8');
});
Route::get('/detail9', function () {
    return view('detail9');
});
Route::get('/detail10', function () {
    return view('detail10');
});
