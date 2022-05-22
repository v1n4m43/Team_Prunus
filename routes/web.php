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
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/orders', 'OrderController'); //orders.index
Route::resource('/products', 'ProductController'); //products.index
Route::resource('/suppliers', 'SupplierController'); //suppliers.index
Route::resource('/companies', 'CompanyController'); //companies.index
Route::resource('/transactions', 'TransactionController'); //transactions.index
Route::resource('/users', 'UserController'); //users.index

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class, ['except' => ['create', 'edit']]);

use App\Http\Controllers\UserController;

Route::resource('users', UserController::class, ['except' => ['create', 'edit']]);

use App\Http\Controllers\OrderController;

Route::resource('orders', OrderController::class, ['except' => ['create', 'edit']]);






