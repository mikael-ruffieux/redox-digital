<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('contact');
});

/*
Route::get('/', function () {
    return redirect('user');
});
*/

Route::resource('users', UserController::class);
Route::resource('projects', ProjectController::class);

Auth::routes();

Route::get('logout', [LoginController::class, 'logout']);

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Contact Form
Route::get('contact', [ContactController::class,'returnForm']);
Route::post('contact', [ContactController::class,'validateAndSendForm']);

// Categories
Route::get('projects/category/{category}', [ProjectController::class, 'projectsWithCategory']);