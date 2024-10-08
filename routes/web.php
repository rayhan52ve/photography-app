<?php

use App\Http\Controllers\Backend\AlbumController;
use App\Http\Controllers\Backend\BioController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\PhotographyController;
use App\Http\Controllers\Backend\WebsiteInfoController;
use App\Http\Controllers\ProfileController;
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
//     return view('welcome');
// });

Route::name('front.')->prefix('')->group(function () {
    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('/about', [FrontendController::class, 'about'])->name('about');
    Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
    Route::get('/gallery-single/{id}', [FrontendController::class, 'gallerySingle'])->name('gallerySingle');
    // Route::get('/services', [FrontendController::class, 'services'])->name('services');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
});


Route::get('/dashboard',[DashboardController ::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::name('admin.')->prefix('admin')->group(function(){
    Route::resource('bio',BioController::class)->only('index','store');
    Route::resource('hero',HeroController::class)->except('show');
    Route::resource('category',CategoryController::class)->except('show');
    Route::resource('album',AlbumController::class);
    Route::resource('photography',PhotographyController::class);
    Route::resource('web-info',WebsiteInfoController::class)->only('index','store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
