<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\HospitalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Doctor\DashboardController as DoctorDashboardController;
use App\Http\Controllers\FrontController;
use App\Models\Hospital;

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


Route::get('redirect', function (Request $request) {
    if (!$request->user()) return redirect()->route('login');

    return redirect()->route('admin.index');
});


// Route::get('posts', [PostController::class, 'index']);

Route::resource('posts', PostController::class)->middleware('auth');


Route::name('admin.')->middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('index');

    Route::resource('hospitals', HospitalController::class);
    Route::resource('doctors', DoctorController::class);
});

Route::name('doctors.')->middleware('auth')->prefix('doctor/dashboard')->group(function () {
    Route::get('', DoctorDashboardController::class)->name('index');
});
