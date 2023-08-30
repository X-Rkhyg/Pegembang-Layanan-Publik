<?php

use App\Http\Controllers\ProfileController;
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
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/colocation', function () {
    return view('admin/colocation');
});

Route::get('/Server/Colocation-Server', function () {
    return view('Colocation-Server');
});

Route::get('/Server/Pengajuan-VPS', function () {
    return view('Pengajuan-VPS');
});

Route::get('/Server/Akses-Fisik', function () {
    return view('Akses-Fisik');
});

Route::get('/Sertifikat-Elektronik/Single-User', function () {
    return view('Single-User');
});

Route::get('/Sertifikat-Elektronik/Multi-User', function () {
    return view('Multi-User');
});

Route::get('/VPS/Permohonan-VPS', function () {
    return view('Permohonan-VPS');
});

Route::get('/VPS/Perubahan-VPS', function () {
    return view('Perubahan-VPS');
});

Route::get('/Server/Pengajuan-Server', function () {
    return view('Pengajuan-Server');
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
