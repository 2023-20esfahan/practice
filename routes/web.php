<?php

use App\Http\Controllers\Admin\Web\CommodityController;
use App\Http\Controllers\Admin\Web\RemittanceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Web\UserController;
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
    return view('Admin.master');
});
// Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
// Route::get('/user/create', [PostController::class, 'create'])->name('users.create');
// Route::post('/user', [PostController::class, 'store'])->name('user.store');
// Route::post('/user', [PostController::class, 'show'])->name('user.show');
// Route::post('/user', [PostController::class, 'delete'])->name('user.delete');
Route::resource('users', App\Http\Controllers\Admin\Web\UserController::class );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
