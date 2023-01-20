<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PostController;
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

Route::get('/', [FrontController::class, 'index']);

Route::get('about', [FrontController::class, 'about']);

Route::get('contact', [FrontController::class, 'contact']);

Route::get('home', [HomeController::class, 'home']);

Route::get('user', [HomeController::class, 'profile']);

Route::get('baby_entry', [HomeController::class, 'baby_entry']);

Route::get('admin', [AdminController::class, 'admin']);


// Route::get('posts', [PostController::class, 'index']);

Route::resource('posts', PostController::class)->middleware('auth');
