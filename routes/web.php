<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('course.login');
});
Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::resource('login', UserController::class) ;
 Route::resource('course', CourseController::class) ;
 Route::resource('category', CategoryController::class) ;








