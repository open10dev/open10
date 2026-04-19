<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

// Home
Route::get('/', [PageController::class, 'home'])->name('home');

// Services Routes
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [PageController::class, 'services'])->name('index');
    Route::get('/development', [PageController::class, 'development'])->name('development');
    Route::get('/ai-delivery', [PageController::class, 'aiDelivery'])->name('ai-delivery');
    Route::get('/idp', [PageController::class, 'idp'])->name('idp');
    Route::get('/devops', [PageController::class, 'devops'])->name('devops');
});

// Solutions Routes
Route::prefix('solutions')->name('solutions.')->group(function () {
    Route::get('/', [PageController::class, 'solutions'])->name('index');
    Route::get('/oss-maintainers', [PageController::class, 'ossMaintainers'])->name('oss-maintainers');
    Route::get('/engineering-teams', [PageController::class, 'engineeringTeams'])->name('engineering-teams');
    Route::get('/leadership', [PageController::class, 'leadership'])->name('leadership');
});

// Supporting Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/work', [PageController::class, 'work'])->name('work');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');

// Newsletter Subscription
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/newsletter/unsubscribe/{token}', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe');

// Admin Panel
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/register', [AdminController::class, 'registerForm'])->name('register');
    Route::post('/register', [AdminController::class, 'register'])->name('register.post');
    Route::get('/login', [AdminController::class, 'loginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::middleware('admin.auth')->group(function () {
        Route::get('/contacts', [AdminController::class, 'contacts'])->name('contacts.index');
        Route::get('/contacts/{contact}', [AdminController::class, 'contactShow'])->name('contacts.show');
        Route::delete('/contacts/{contact}', [AdminController::class, 'contactDelete'])->name('contacts.delete');

        Route::get('/subscribers', [AdminController::class, 'subscribers'])->name('subscribers.index');
        Route::delete('/subscribers/{subscriber}', [AdminController::class, 'subscriberDelete'])->name('subscribers.delete');

        Route::get('/visitors', [AdminController::class, 'visitors'])->name('visitors.index');
        Route::delete('/visitors/{visitor}', [AdminController::class, 'visitorDelete'])->name('visitors.delete');
    });
});
