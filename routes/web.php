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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/add_buyer', [AdminController::class, 'add_buyer'])->name('add_buyer');
Route::post('/add_employee', [AdminController::class, 'add_employee'])->name('add_employee');
Route::get('/user_list', [AdminController::class, 'user_list'])->name('user_list');

Route::get('/', function () {
    return view('user.login');
});
Route::get('/product', function () {
    return view('product_details');
});
Route::get('/product_add', function () {
    return view('add_product_info');
});
Route::get('/product_user_view', function () {
    return view('product_info_for_user');
});
Route::get('/product_add_dates', function () {
    return view('add_product_dates');
});
Route::get('/product_details_edit', function () {
    return "Hello From Edit";
});
// Route::get('/user_list', function () {
//     return view('user.user_list');
// });
