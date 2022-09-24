<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonController;
use App\Http\Controllers\OrganisationController;

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

Route::group(['as' => 'pdg::'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/organisation', [OrganisationController::class, 'index'])->name('organisation');
    Route::get('/election', [DonationController::class, 'index'])->name('election');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::get('/adhesion', [UserController::class, 'adhesion'])->name('adhesion');
    Route::get('/actualite', function () {
        return view('pages.actusparti');
    });
    // payment or dons with paypal mode
    Route::post('/donnation', [DonController::class, 'dons'])->name('dons.membre');
});
