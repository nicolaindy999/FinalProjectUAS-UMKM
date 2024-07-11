<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/umkm', [UmkmController::class, 'index'])->name('umkm.index');
Route::get('/admin/umkm/create', [UmkmController::class, 'create'])->name('umkm.create');
Route::get('/admin/umkm/{umkm}', [UmkmController::class, 'show'])->name('umkm.show');
Route::post('/admin/umkm/store', [UmkmController::class, 'store'])->name('umkm.store');
Route::get('/admin/umkm/edit', [UmkmController::class, 'edit'])->name('umkm.edit');
Route::put('/admin/umkm/', [UmkmController::class, 'update'])->name('umkm.update');
Route::delete('admin/umkm/{id}', [UmkmController::class, 'destroy'])->name('umkm.destroy');
Route::resource('umkm', 'UMKMController');
Route::resource('umkm', UmkmController::class);