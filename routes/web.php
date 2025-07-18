<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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
    return view('welcome');
});

Route::get('/home',[SiteController::class, 'home'])->name('site:home');
Route::get('/about', [SiteController::class, 'about'])->name('site:about');
Route::get('/contact', [SiteController::class, 'contact'])->name('site:contact');
Route::post('/contact/requete/', [SiteController::class, 'save_requete'])->name(name: 'site.requete');

