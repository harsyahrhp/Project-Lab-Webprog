<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('Home');
});

// Route::get('/Register', function () {
//     return view('Register');
// });

// Route::get('/Login', function () {
//     return view('Login');
// });

Route::get('/nav', function () {
    return view('NavbarAdmin');
});

Route::get('/HomeUser', function () {
    return view('HomeUser');
});

Route::get('/Product', function () {
    return view('Product');
});

Route::get('/Login', [LoginController::class, 'index']);
Route::post('/Login', [LoginController::class, 'authenticate']);

Route::get('/Register', [RegisterController::class, 'index']);

Route::post('/Register', [RegisterController::class, 'store']);

