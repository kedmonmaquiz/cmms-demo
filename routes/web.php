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

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/all-users', function () {
    return view('all-users');
});

Route::get('/all-equipments', function () {
    return view('all-equipments');
});

Route::get('/all-floors', function () {
    return view('all-floors');
});

Route::get('/all-tasks', function () {
    return view('all-tasks');
});

Route::get('/add-task', function () {
    return view('add-task');
});