<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Mahasiswa
    |--------------------------------------------------------------------------
    */

    // Halaman daftar mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])
        ->name('mahasiswa.index');


    /*
    |--------------------------------------------------------------------------
    | Route khusus Admin
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:admin')->group(function () {

        // Tambah mahasiswa
        Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])
            ->name('mahasiswa.create');

        // Simpan mahasiswa
        Route::post('/mahasiswa', [MahasiswaController::class, 'store'])
            ->name('mahasiswa.store');

        // Form edit mahasiswa
        Route::get('/mahasiswa/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])
            ->name('mahasiswa.edit');

        // Update mahasiswa
        Route::put('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'update'])
            ->name('mahasiswa.update');

        // Hapus mahasiswa
        Route::delete('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'destroy'])
            ->name('mahasiswa.destroy');
    });


    /*
    |--------------------------------------------------------------------------
    | Detail mahasiswa
    |--------------------------------------------------------------------------
    */

    Route::get('/mahasiswa/{mahasiswa}', [MahasiswaController::class, 'show'])
        ->name('mahasiswa.show');


    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';