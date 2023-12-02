<?php

use App\Http\Controllers\Admin\{ReplyPacienteController, PacienteController};
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/paciente/{id}/replies', [ReplyPacienteController::class, 'store'])->name('replies.store');
    Route::delete('/paciente/{id}/replies/{reply}', [ReplyPacienteController::class, 'destroy'])->name('replies.destroy');
    Route::get('/paciente/{id}/replies', [ReplyPacienteController::class, 'index'])->name('replies.index');

    // Route::resource('/paciente', PacienteController::class);
    Route::delete('/paciente/{id}', [PacienteController::class, 'destroy'])->name('paciente.destroy');
    Route::put('/paciente/{id}', [PacienteController::class, 'update'])->name('paciente.update');
    Route::get('/paciente/{id}/edit', [PacienteController::class, 'edit'])->name('paciente.edit');
    Route::get('/paciente/create', [PacienteController::class, 'create'])->name('paciente.create');
    Route::post('/paciente', [PacienteController::class, 'store'])->name('paciente.store');
    Route::get('/paciente', [PacienteController::class, 'index'])->name('paciente.index');
});

require __DIR__ . '/auth.php';
