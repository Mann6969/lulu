<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CkeditorController;
use App\Http\Controllers\Admin\BlogcategoryController;

use App\Http\Controllers\Admin\UseradminController;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SendEmailController;

Route::get('/mail', [SendEmailController::class, 'index']);

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
//  Testing route

// Route::get('/role', [UserController::class, 'endingpage'])->name('role.create');

// Route::get('/hme', [AdminController::class, 'home'])->name('role.create');
// Route::get('/h', [AdminController::class, 'home'])->name('role.index');
// Route::get('/ho', [AdminController::class, 'home'])->name('role.edit');
// Route::get('/hom', [AdminController::class, 'home'])->name('role.destroy');
// Route::get('/role', [UserController::class, 'endingpage'])->name('role.create');
// Route::get('/role', [UserController::class, 'endingpage'])->name('role.create');
// Route::get('/role', [UserController::class, 'endingpage'])->name('role.create');



Auth::routes();
//admin Routes
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Dashboard page
    Route::get('/index', [AdminController::class, 'index'])->name('admin.home');
    // Upload User page
    Route::get('/upload_user', [AdminController::class, 'upload_users']);
    Route::post('/submit', [AdminController::class, 'submit']);
    Route::get('/upload_user/{fid}', [AdminController::class, 'upload_user']);
    // Show User page
    Route::get('/show_user', [AdminController::class, 'show_user']);
    Route::get('/view/{id}', [AdminController::class, 'view']);
    Route::get('/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/update', [AdminController::class, 'update']);
    Route::post('/show_destroy/{id}', [AdminController::class, 'delete']);
    //subscribed user
    Route::get('/subscribed', [AdminController::class, 'subscribed']);


    //search routes
    Route::get('/searchuser', [AdminController::class, 'search'])->name('searchuser');
    Route::get('/searchfile', [AdminController::class, 'search_file'])->name('searchfile');

    //checking mail
    Route::get('/email', [AdminController::class, 'email']);



    //permissions route
    Route::get('/permission', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('/permission_create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('/permission_create', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('/permission_edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::post('/permission_delete/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');
    Route::post('/permission_edit/{id}', [PermissionController::class, 'update'])->name('permission.update');


    //roles routes
    Route::get('/role', [RoleController::class, 'index'])->name('role.index');
    Route::get('/role_create', [RoleController::class, 'create'])->name('role.create');
    Route::get('/role_edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
    Route::post('/role_created', [RoleController::class, 'store'])->name('role.store');
    Route::post('/role_update', [RoleController::class, 'store'])->name('role.update');
    Route::post('/role_destroy/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

    //admin user add routes
    Route::get('/user', [UseradminController::class, 'index'])->name('user.index');
    Route::get('/user_add', [UseradminController::class, 'create'])->name('user.create');
    Route::post('/user_add', [UseradminController::class, 'store'])->name('user.store');
    Route::get('/user_edit/{id}', [UseradminController::class, 'edit'])->name('user.edit');
    Route::post('/user_destroy/{id}', [UseradminController::class, 'destroy'])->name('user.destroy');
    Route::post('/user_update/{id}', [UseradminController::class, 'update'])->name('user.update');



    //admin blogs routes
    Route::get('/Blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/Blog_add', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/Blog_add', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/Blog_edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/Blog_destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::post('/Blog_update/{id}', [BlogController::class, 'update'])->name('blog.update');
    
    //admin ckeditor routes
    Route::post('/ckeditor', [CkeditorController::class, 'upload'])->name('ckeditor.upload');
    // blog slug generator


    //blog_category routes
    Route::get('/Blog_category', [BlogcategoryController::class, 'index'])->name('blogcategory.index');
    Route::get('/Blog_category_add', [BlogcategoryController::class, 'create'])->name('blogcategory.create');
    Route::post('/Blog_store', [BlogcategoryController::class, 'store'])->name('blogcategory.store');
    // Route::get('/get-slug', [BlogcategoryController::class, 'getslug'])->name('blog.slug');
    Route::get('/Blogcategory_edit/{id}', [BlogcategoryController::class, 'edit'])->name('blogcategory.edit');
    Route::post('/Blogcategory_update/{id}', [BlogcategoryController::class, 'update'])->name('blogcategory.update');
    Route::post('/Blogcategory_destroy/{id}', [BlogcategoryController::class, 'destroy'])->name('blogcategory.destroy');
});
// Route::view('admin/generate-slug', 'livewire.welcome');
//user routes
// get
Route::get('/thankyou', [UserController::class, 'endingpage'])->name('ending');
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
Route::get('/listing', [UserController::class, 'listing'])->name('listing');
Route::get('/index', [UserController::class, 'index'])->name('index');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::post('/contact', [UserController::class, 'contactUpload'])->name('contact.upload');
// Route::post('/state', [UserController::class, 'state'])->name('state');
Route::get('/filter', [UserController::class, 'filter'])->name('filter');
Route::get('/blog/{slug}', [UserController::class, 'singleBlog'])->name('singleBlog');
Route::get('/blogs', [UserController::class, 'blog'])->name('blog');


// post
Route::post('/upload', [UserController::class, 'upload'])->name('upload');
Route::post('/subscribe', [UserController::class, 'subscribe'])->name('subscribe');
// Route::post('/state', [UserController::class, 'state'])->name('state');