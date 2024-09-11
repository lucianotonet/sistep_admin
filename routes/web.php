<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestApplicationController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/test-applications', [TestApplicationController::class, 'index'])->name('test-applications.index');
    Route::post('/test-applications', [TestApplicationController::class, 'store'])->name('test-applications.store');
    Route::get('/test-applications/create', [TestApplicationController::class, 'create'])->name('test-applications.create');
    Route::get('/test-applications/{testApplication}', [TestApplicationController::class, 'show'])->name('test-applications.show');
    Route::get('/test-applications/{testApplication}/share', [TestApplicationController::class, 'share'])->name('test-applications.share');
});

Route::resource('tests', TestController::class);

Route::get('/tcle', function () {
    return view('tcle');
})->name('tcle');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/cookies', function () {
    return view('cookies');
})->name('cookies');

Route::get('/changelog', function () {
    return view('changelog');
})->name('changelog');

require __DIR__.'/auth.php';
