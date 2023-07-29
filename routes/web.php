<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\RedirectIfNotLoggedIn;

//Home page
Route::get('/', function () {
    return view('frontend/index');
});

//Logout
Route::get('/logout', [AuthController::class, 'getLogout']);

//Login---register
Route::group(['prefix' => 'user'], function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin']);
    Route::get('/register', [AuthController::class, 'getRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'postRegister']);

});
//Login google
Route::get('/user/auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

    Route::get('/products', [HomeController::class, 'getproducts']);
    Route::get('introduction', [HomeController::class, 'getintroduction']);
    Route::get('terms-of-service', [HomeController::class, 'gettermsofservice']);
    Route::get('details', [HomeController::class, 'getdetails']);
    Route::get('contact', [HomeController::class, 'getcontact']);
    Route::get('services', [HomeController::class, 'getservices']);
    Route::get('/products/{id}', 'HomeController@show')->name('product.show');
    Route::get('/prosuct_detail/{id}', [HomeController::class, 'showDetail'])->name('product.detail');

//Admin
Route::group(['middleware' => 'auth.redirect'], function () {
    // dashboard
    Route::get('/admin-dashboard', [DashboardController::class, 'getdashboard']);
    //services
    Route::get('/admin-products', [ProductController::class, 'getproducts']);
    Route::get('/admin-product-add', [ProductController::class, 'getproductadd']);
    Route::post('/admin-product-add', [ProductController::class, 'postproductadd'])->name('productadd');
    Route::get('/admin-product-delete-{id}',[ProductController::class, 'deleteproduct'])->name('deleteproduct');
    Route::get('/admin-product-edit-{id}',[ProductController::class, 'getproductedit'])->name('getproductedit');
    Route::post('/admin-product-edit-{id}',[ProductController::class, 'postproductedit'])->name('postproductedit');
    //users
    Route::get('/admin-users', [UserController::class, 'getusers']);
    Route::get('/admin-user-add', [UserController::class, 'getuseradd']);
    Route::post('/admin-user-add', [UserController::class, 'postuseradd'])->name('useradd');
    Route::get('/admin-users-delete-{id}', [UserController::class, 'getuserdelete'])->name('getuserdelete');
    Route::post('/admin-user-edit-{id}', [UserController::class, 'postuseredit'])->name('postuseredit');
    Route::get('/admin-users-edit-{id}', [UserController::class, 'getuseredit'])->name('getuseredit');
   //notification
    Route::get('/notification', [DashboardController::class,'notification'])->name('notification');
});
