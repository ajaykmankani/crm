<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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


Route::group(['middleware' => 'auth'], function () {
    // Get the admin controller and logout routes
    Route::get('/webmaster', [AdminController::class, 'admin'])->name('admin');
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('leads', [AdminController::class, 'leads'])->name('leads');
});

// Creates the login and forgot password routes.
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'login_user']);
    Route::get('/register', [AdminController::class, 'register'])->name('register');
    Route::post('/register', [AdminController::class, 'register'])->name('register');
    Route::get('forgotPassword', [AdminController::class, 'forgotPassword'])->name('forgotPassword');
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('index', [HomeController::class, 'home']);
Route::get('home', [HomeController::class, 'home']);
Route::get('about', [HomeController::class, 'about']);
Route::get('services', [HomeController::class, 'services']);
Route::get('contact', [HomeController::class, 'contact']);

Route::get('blog', [HomeController::class, 'blog'])->name('blog');

Route::post('contact', [HomeController::class, 'contact_form'])->name('contact');
