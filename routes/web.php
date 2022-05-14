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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/poststatusform', function () {
    return view('poststatusform');
});

Route::get('/poststatusprocess', function () {
    return view('poststatusprocess');
});

Route::get('/searchstatusform', function () {
    return view('searchstatusform');
});

Route::get('/searchstatusprocess', function () {
    return view('searchstatusprocess');
});

Route::get('/about', function () {
    return view('about');
});