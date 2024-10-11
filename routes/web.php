<?php

use App\Http\Controllers\{PaperController, ProfileController};
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

});

Route::get('/paper/index', [PaperController::class, 'index'])->name('profile.index');
Route::post('/paper/create', [PaperController::class, 'create'])->name('paper.create');

require __DIR__ . '/auth.php';
