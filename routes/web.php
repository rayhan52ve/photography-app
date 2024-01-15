<?php

use App\Http\Controllers\FrontendController;
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

// Route::get('/', function () {
//     return view('Frontend.modules.index');
// });

Route::name('front.')->prefix('')->group(function () {
    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
    Route::get('/gallery-single', [FrontendController::class, 'gallerySingle'])->name('gallerySingle');
    // Route::get('/services', [FrontendController::class, 'services'])->name('services');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
});
