<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/poststatusform', function () {
    return view('poststatusform', [
        "title" => "Post Status Form"
    ]);
});
// TODO
// Route::get('/poststatusprocess', function () {
//     return view('poststatusprocess');
// });
Route::get('poststatusprocess', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);
Route::resource('posts', PostController::class);

Route::get('/searchstatusform', function () {
    return view('searchstatusform', [
        "title" => "Search Status Form"
    ]);
});
Route::get('/searchstatusprocess', [PostController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});