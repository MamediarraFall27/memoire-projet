<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\LocationsController;
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

Route::resource('locations', LocationsController::class);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin', function () {
    return view('admin');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('accueil', function () {
    return view('accueil');
});

Route::get('achat', function () {
    return view('achat');
});


Route::get('louer', function () {
    return view('louer');
});

Route::get('vente', function () {
    return view('vente');
});

Route::get('propos', function () {
    return view('propos');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
