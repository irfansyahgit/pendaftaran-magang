<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplicationController;

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

// Download pdf
Route::get('/download/ktp/{filename}', [PDFController::class, 'downloadKTP'])->name('download.ktp');
Route::get('/download/ktm/{filename}', [PDFController::class, 'downloadKTM'])->name('download.ktm');
Route::get('/download/proposal/{filename}', [PDFController::class, 'downloadProposal'])->name('download.proposal');
Route::get('/download/permohonan/{filename}', [PDFController::class, 'downloadPermohonan'])->name('download.permohonan');


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/lamaran', [ApplicationController::class, 'create'])->middleware(['auth', 'verified'])->name('lamaran');
Route::post('/lamaran', [ApplicationController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/lamaran/{lamaran}', [ApplicationController::class, 'show'])->middleware(['auth', 'verified']);


Route::get('/lamaran/{lamaran}/edit', [ApplicationController::class, 'edit'])->middleware(['auth', 'verified']);
Route::put('/lamaran{lamaran}', [ApplicationController::class, 'update'])->middleware(['auth', 'verified']);


Route::get('/riwayat/{user:name}', [ApplicationController::class, 'index'])->middleware(['auth', 'verified'])->name('riwayat');
Route::get('/data', [ApplicationController::class, 'index2'])->middleware(['auth', 'verified'])->name('data');
Route::put('/lamaran/{lamaran}', [ApplicationController::class, 'update'])->middleware(['auth', 'verified']);


Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
