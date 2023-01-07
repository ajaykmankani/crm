<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    // Authentication middleware.
})->name('home');
Route::group(['middleware' => 'auth'], function () {
    // Get the admin controller and logout routes
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});

// Creates the login and forgot password routes.
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'login_user']);
    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::post('/register', [AdminController::class, 'register'])->name('register');
    Route::get('forgotPassword', [AdminController::class, 'forgotPassword'])->name('forgotPassword');
});