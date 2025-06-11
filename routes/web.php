<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\DiariController;
use App\Http\Controllers\BelajarController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BerandaController::class, 'index'])->name('home');

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/diari', [DiariController::class, 'index'])->name('diari');
    Route::get('/diari/create', [DiariController::class, 'create'])->name('diari.create');
    Route::post('/diari', [DiariController::class, 'store'])->name('diari.store');

    Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala');

    Route::get('/belajar', [BelajarController::class, 'index'])->name('belajar');
    Route::get('/belajar/enroll', [BelajarController::class, 'enroll'])->name('belajar.enroll');

});


require __DIR__ . '/auth.php';
