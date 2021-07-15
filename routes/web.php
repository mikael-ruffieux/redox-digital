<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AccordionController;
use App\Http\Controllers\ImageController;
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

        Route::prefix('just-chat')->group(function () {
            Route::view('step-1', 'public.contact.contact-form-name', ['step' => 1, 'steps' => 4, 'next' => 'chat.mail', 'prev' => false, 'chat' => true])->name('contact.chat.name');
            Route::post('step-1', [ContactController::class, 'postName'])->name('contact.chat.name.post');

            Route::view('step-2', 'public.contact.contact-form-mail', ['step' => 2, 'steps' => 4, 'next' => 'chat.message', 'prev' => 'chat.name', 'chat' => true])->name('contact.chat.mail');
            Route::post('step-2', [ContactController::class, 'postMail'])->name('contact.chat.mail.post');

            Route::view('step-3', 'public.contact.contact-form-message', ['step' => 3, 'steps' => 4, 'next' => 'chat.summary', 'prev' => 'chat.mail', 'chat' => true])->name('contact.chat.message');
            Route::post('step-3', [ContactController::class, 'postMessage'])->name('contact.chat.message.post');
            
            Route::get('summary', [ContactController::class, 'showSummary'])->name('contact.chat.summary');
            Route::post('summary', [ContactController::class, 'send'])->name('contact.send');
        });

        Route::prefix('start-a-project')->group(function () {
            Route::view('step-1', 'public.contact.contact-form-name', ['step' => 1, 'steps' => 6, 'next' => 'start.mail', 'prev' => false, 'chat' => false])->name('contact.start.name');
            Route::post('step-1', [ContactController::class, 'postName'])->name('contact.start.name.post');

            Route::view('step-2', 'public.contact.contact-form-mail', ['step' => 2, 'steps' => 6, 'next' => 'start.project-type', 'prev' => 'start.name', 'chat' => false])->name('contact.start.mail');
            Route::post('step-2', [ContactController::class, 'postMail'])->name('contact.start.mail.post');

            Route::view('step-3', 'public.contact.contact-form-project-type', ['step' => 3, 'steps' => 6, 'next' => 'start.budget', 'prev' => 'start.mail', 'chat' => false])->name('contact.start.project-type');
            Route::post('step-3', [ContactController::class, 'postProjectType'])->name('contact.start.project-type.post');

            Route::view('step-4', 'public.contact.contact-form-budget', ['step' => 4, 'steps' => 6, 'next' => 'start.message', 'prev' => 'start.project-type', 'chat' => false])->name('contact.start.budget');
            Route::post('step-4', [ContactController::class, 'postBudget'])->name('contact.start.budget.post');

            Route::view('step-5', 'public.contact.contact-form-message', ['step' => 5, 'steps' => 6, 'next' => 'start.summary', 'prev' => 'start.budget', 'chat' => false])->name('contact.start.message');
            Route::post('step-5', [ContactController::class, 'postMessage'])->name('contact.start.message.post');
            
            Route::get('summary', [ContactController::class, 'showSummary'])->name('contact.start.summary');
            Route::post('summary', [ContactController::class, 'send'])->name('contact.send');

        });
    });    
});


// ##### Routes privées #####
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', function () { return redirect(route('admin.home')); });

    Route::get('home', [AdminController::class, 'home'])->name('admin.home');
    Route::get('logout', [LoginController::class, 'logout']);

    Route::resource('clients', ClientController::class);
    Route::resource('projects', ProjectController::class);

    Route::get('projects/{project_id}/gallery', [ImageController::class, 'index'])->name('project.gallery');
    Route::post('projects/{project_id}/gallery', [ImageController::class, 'add'])->name('project.gallery.add');
    Route::delete('projects/{project_id}/gallery/{image_id}', [ImageController::class, 'destroy'])->name('project.gallery.destroy');

    Route::resource('services', ServiceController::class);
    Route::get('services/{service_id}/accordion/create', [AccordionController::class, 'create'])->name('accordions.create');
    Route::resource('accordions', AccordionController::class)->only('destroy', 'update', 'store');
});