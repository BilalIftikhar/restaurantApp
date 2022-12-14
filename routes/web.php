<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\tableController;
use App\Http\Controllers\CashierController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/management', function () {
    return view('management.index');
});
Route::get('/cashier', [App\Http\Controllers\CashierController::class, 'index']);
Route::get('/cashier/getTable', [App\Http\Controllers\CashierController::class, 'getTable']);
Route::get('/cashier/getMenuTable/{id}', [App\Http\Controllers\CashierController::class, 'getMenuTable']);
Route::resource('/management/category', CategoryController::class);
Route::resource('/management/menu', MenuController::class);
Route::resource('/management/table', tableController::class);
