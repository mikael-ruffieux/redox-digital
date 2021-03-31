<?php

use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Route::get('/admin/', [AdminController::class, 'dashboard']);

Route::get('/admin/projects', [AdminController::class, 'displayAllProjects']);

Route::get('/admin/projects/new', [AdminController::class, 'displayNewProject']);
Route::post('/admin/projects/new', [AdminController::class, 'addNewProject']);

