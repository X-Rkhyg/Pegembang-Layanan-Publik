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

Route::get('/shel', function () {
    return view('PermohonanPerubahanVPS');
});

Route::get('/phau', function () {
    return view('sertifikatelektronikmultiuser');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/colocation', function () {
    return view('admin/colocation');
});

Route::get('/VPS/f2', function () {
    return view('f2');
});

Route::get('/VPS/f7', function () {
    return view('f7');
});

Route::get('/VPS/f5', function () {
    return view('f5');
});

Route::get('/VPS/f3', function () {
    return view('f3');
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
