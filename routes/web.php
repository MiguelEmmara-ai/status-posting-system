<?php

use App\Http\Controllers\PostController;
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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/poststatusform', [PostController::class, 'create']);
Route::post('/poststatusform', [PostController::class, 'store']);

Route::get('/searchstatusform', function () {
    return view('searchstatusform', [
        "title" => "Search Status Form",
    ]);
});
Route::get('/searchstatusprocess', [PostController::class, 'show']);
