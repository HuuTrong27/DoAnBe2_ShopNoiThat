<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
Route::get('/', [Controller::class, 'page'])->name('index');
Route::get('/index', [Controller::class, 'index'])->name('index'); // Trang "index"
Route::get('/about', [Controller::class, 'about'])->name('about'); // Trang "about"
Route::get('/contact', [Controller::class, 'contact'])->name('contact'); // Trang "contact"
Route::get('/shop', [Controller::class, 'shop'])->name('shop'); // Trang "shop"
Route::get('/furniture', [Controller::class, 'furniture'])->name('furniture'); // Trang "furniture"
Route::match(['get', 'post'],'/register_form', [Controller::class, 'registerForm'])->name('register_form'); // Trang "register_form"

