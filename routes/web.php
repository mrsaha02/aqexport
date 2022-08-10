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

Route::get('/user_list', [AdminController::class, 'user_list'])->name('user_list');

Route::post('/add_buyer', [AdminController::class, 'add_buyer'])->name('add_buyer');
Route::get('/buyer_edit/{id}', [AdminController::class, 'buyer_edit']);
Route::put('/update_buyer', [AdminController::class, 'update_buyer'])->name('update_buyer');

Route::post('/add_employee', [AdminController::class, 'add_employee'])->name('add_employee');
Route::get('/employee_edit/{id}', [AdminController::class, 'employee_edit']);
Route::put('/update_employee', [AdminController::class, 'update_employee'])->name('update_employee');

Route::get('/product_details', [AdminController::class, 'product_details'])->name('product_details');
Route::get('/product_all_details/{id}', [AdminController::class, 'product_all_details'])->name('product_all_details');
Route::get('/product_add_form', [AdminController::class, 'product_add_form'])->name('product_add_form');
Route::post('/product_add', [AdminController::class, 'product_add'])->name('product_add');
Route::put('/product_add_date', [AdminController::class, 'product_add_date'])->name('product_add_date');//next


Route::get('/', function () {
    return view('user.login');
});
// Route::get('/product', function () {
//     return view('product_details');
// });
// Route::get('/product_add', function () {
//     return view('add_product_info');
// });
// Route::get('/product_user_view', function () {
//     return view('product_info_for_user');
// });
Route::get('/product_add_dates', function () {
    return view('add_product_dates');
});
Route::get('/product_details_edit', function () {
    return "Hello From Edit";
});
// Route::get('/user_list', function () {
//     return view('user.user_list');
// });
