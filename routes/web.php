<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplicationController;
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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/lamaran', [ApplicationController::class, 'create'])->middleware(['auth', 'verified'])->name('lamaran');
Route::post('/lamaran', [ApplicationController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/lamaran/{lamaran}', [ApplicationController::class, 'show'])->middleware(['auth', 'verified']);

Route::get('/riwayat/{user:name}', [ApplicationController::class, 'index'])->middleware(['auth', 'verified'])->name('riwayat');


Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
