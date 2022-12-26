<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//admin Routes
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/index', [AdminController::class, 'index']);
    Route::get('/upload_user', [AdminController::class, 'upload_users']);
    Route::post('/submit', [AdminController::class, 'submit']);
    Route::get('/upload_user/{fid}', [AdminController::class, 'upload_user']);
    Route::get('/show_user', [AdminController::class, 'show_user']);
    Route::get('/view/{id}', [AdminController::class, 'view']);
});

//user routes
// get
Route::get('/thankyou', [UserController::class, 'endingpage'])->name('ending');
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
Route::get('/listing', [UserController::class, 'listing'])->name('listing');
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
// post
Route::post('/upload', [UserController::class, 'upload'])->name('upload');
Route::post('/subscribe', [UserController::class, 'subscribe'])->name('subscribe');