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
    return view('main');
});
Route::get('/Students', function () {
    return view('Students');
});


Route::get('/Subjects', function () {
    return view('Subjects');
});
Route::get('/Teachers', function () {
    return view('Teachers');
});
Route::get('/Events', function () {
    return view('Events');
});
Route::get('/Exams', function () {
    return view('Exams');
});
