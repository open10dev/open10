<?php

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
