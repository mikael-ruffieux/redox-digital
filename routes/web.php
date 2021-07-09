<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AccordionController;
use App\Http\Controllers\PublicPagesController;
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

// ##### Routes publiques #####
Route::get('/', function () { return redirect(route('maintenance.contact')); })->name('public.home');

Auth::routes();

// Contact Form
Route::get('contact', [ContactController::class,'returnForm'])->name('maintenance.contact');
Route::post('contact', [ContactController::class,'validateAndSendForm']);

// ##### Routes privées pendant le développement #####
Route::prefix('dev')->middleware('auth')->group(function () {
    Route::get('/', [PublicPagesController::class, 'home'])->name('home');
    Route::view('maintenance', 'public.maintenance')->name('maintenance');

    // à voir si on garde ce système, ou si on fait 2 chemins & méthodes
    Route::get('nos-services-de-{type}', [PublicPagesController::class, 'services'])->name('services');

    Route::prefix('portfolio')->group(function () {
        Route::get('/', [PublicPagesController::class, 'portfolio'])->name('portfolio');
        Route::get('{id}', [PublicPagesController::class, 'portfolio_project'])->name('portfolio.project');

    });

    Route::view('a-propos', 'public.about')->name('about');

    Route::prefix('contact')->group(function () {
        Route::view('/', 'public.contact.contact')->name('contact');
        Route::view('intro', 'public.contact.contact-form')->name('contact.intro');
        Route::view('just-chat', 'public.contact.contact-just-chat')->name('contact.just-chat');
        Route::view('start-a-project', 'public.contact.contact-start-a-project')->name('contact.start-a-project');

        Route::post('just-chat', [ContactController::class, 'sendChatForm'])->name('contact.send-chat');
        Route::post('start-a-project', [ContactController::class, 'sendProjectForm'])->name('contact.send-project');
    });

    // à enlever à la fin
    Route::view('example', 'view_example_page');
    
});


// ##### Routes privées #####
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('logout', [LoginController::class, 'logout']);

    Route::resource('clients', ClientController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('services', ServiceController::class);
    Route::get('services/{service_id}/accordion/create', [AccordionController::class, 'create'])->name('accordions.create');
    Route::resource('accordions', AccordionController::class)->only('destroy', 'update', 'store');
});