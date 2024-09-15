<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestApplicationController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\PatientController;
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
    Route::get('/test-applications/{testApplication}/qrcode', [TestApplicationController::class, 'qrcode'])->name('test-applications.qrcode');
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

Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');

Route::middleware(['auth'])->group(function () {
    Route::resource('patients', PatientController::class);
    // Adicione outras rotas que requerem acesso de administrador aqui
});

Route::post('/accept-tcle', [App\Http\Controllers\TcleController::class, 'accept'])->middleware('auth')->name('accept.tcle');

require __DIR__.'/auth.php';
