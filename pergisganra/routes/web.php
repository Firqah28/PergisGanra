<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\IdentitasController;
use App\Models\Galeri;
use App\Http\Controllers\GaleriController;

/*
|--------------------------------------------------------------------------|
| Routes for Guest (Tanpa Login)                                           |
|--------------------------------------------------------------------------|
*/

Route::get('/', [BeritaController::class, 'tampilkanBerita'])->name('home');
Route::get('/informasi', [InformasiController::class, 'index']);
Route::view('/profil', 'profil.index');
Route::view('/profil/visi-misi', 'profil.visi');
Route::get('/profil/murid', [SiswaController::class, 'index'])->name('murid.index');
Route::get('/profil/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/profil/guru', [GuruController::class, 'showGuruUntukUser'])->name('profil.guru');
Route::get('/mainberita', [BeritaController::class, 'main'])->name('mainberita');

Route::view('/layanan', 'layanan.index');
Route::view('/galeri', 'galeri.index');
Route::view('/hubungi-kami', 'hubungi.index');

Route::get('/profil/identitas', [ProfilController::class, 'identitas'])->name('profil.identitas');
Route::get('/profil/identitas', [IdentitasController::class, 'index']);
Route::get('/profil/sejarah', [ProfilController::class, 'sejarah'])->name('profil.sejarah');

/*
|--------------------------------------------------------------------------|
| Routes for Auth                                                          |
|--------------------------------------------------------------------------|
*/

// Login & Register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

/*
|--------------------------------------------------------------------------|
| Routes for Admin                                                         |
|--------------------------------------------------------------------------|
*/

// Hanya bisa diakses oleh admin
Route::middleware(['auth', 'checkadmin'])->group(function () {
    Route::get('/admin/dashboard', fn () => view('admin.dashboard'))->name('admin.dashboard');
    Route::resource('berita', BeritaController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('galeri', GaleriController::class);
});

/*
|--------------------------------------------------------------------------|
| Routes for User                                                          |
|--------------------------------------------------------------------------|
*/

// Galeri untuk user
Route::get('/maingaleri', function () {
    $galeris = \App\Models\Galeri::latest()->get();
    return view('maingaleri', compact('galeris'));
})->name('maingaleri');
