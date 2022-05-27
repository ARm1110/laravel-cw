<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});


// Route::get('/home', function () {
//     return view('home');
// });



Route::get('/home', [UserController::class, 'show']);

// Route::view('/home','home');

Route::get('/about', [UserController::class, 'about']);

Route::get('/contact', [UserController::class, 'contact']);

Route::get('/dashboard', [UserController::class, 'dashboard']);

Route::get('/user/{var1}/{var2}/{var3}', [UserController::class, 'check']);