<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListUmkm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\PembinaController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\KategoriumkmController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/umkm', function () {
    return view('umkm.index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/umkm', [UmkmController::class, 'index'])->name('umkm.index');
Route::get('/admin/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
Route::get('/admin/umkm/{umkm}', [UmkmController::class, 'show'])->name('umkm.show');
Route::post('/admin/umkm/store', [UmkmController::class, 'store'])->name('umkm.store');
Route::get('/admin/umkm/edit', [UmkmController::class, 'edit'])->name('umkm.edit');
Route::put('/admin/umkm/', [UmkmController::class, 'update'])->name('umkm.update');
Route::delete('admin/umkm/{id}', [UmkmController::class, 'destroy'])->name('umkm.destroy');
Route::resource('admin/umkm', 'UMKMController');
Route::resource('admin/umkm', UmkmController::class);
Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm.index');
Route::get('/', [ListUmkm::class, 'index'])->name('index');
Route::get('/admin/provinsis', [ProvinsiController::class, 'index'])->name('provinsis.index');
Route::get('/admin/pembinas', [PembinaController::class, 'index'])->name('pembinas.index');
Route::get('/admin/kabkotas', [KabkotaController::class, 'index'])->name('kabkotas.index');
Route::get('/admin/kategoriumkms', [KategoriumkmController::class, 'index'])->name('kategoriumkms.index');
