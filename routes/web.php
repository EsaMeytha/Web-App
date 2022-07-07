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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register'=>false]);
Route::get('logout','App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('superadmin/home', [App\Http\Controllers\HomeController::class, 'superadminHome'])->name('superadmin.home')->middleware('is_admin');

Route::resource('product','App\Http\Controllers\ProductController');

//admin
Route::resource('admin','App\Http\Controllers\AdminController');
Route::get('/home/view', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
Route::get('rejected/{id}', 'App\Http\Controllers\AdminController@rejected')->name('rejected');
Route::get('approved/{id}', 'App\Http\Controllers\AdminController@approved')->name('approved');

//view total user
Route::get('view/approved', [App\Http\Controllers\HomeController::class, 'viewapproved'])->name('pages.total.totalapproved');
Route::get('view/rejected', [App\Http\Controllers\HomeController::class, 'viewrejected'])->name('pages.total.totalrejected');
Route::get('view/pending', [App\Http\Controllers\HomeController::class, 'viewpending'])->name('pages.total.totalpending');

//view total admin
Route::get('approved', [App\Http\Controllers\AdminController::class, 'Aviewapproved'])->name('pages.Atotal.Atotalapproved');
Route::get('rejected', [App\Http\Controllers\AdminController::class, 'Aviewrejected'])->name('pages.Atotal.Atotalrejected');
Route::get('pending', [App\Http\Controllers\AdminController::class, 'Aviewpending'])->name('pages.Atotal.Atotalpending');

