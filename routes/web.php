<?php

use App\Livewire\AdminDashboard;
use App\Livewire\AdminPembayaran;
use App\Livewire\AdminPesanan;
use App\Livewire\Artikel;
use App\Livewire\Home;
use App\Livewire\Kontak;
use App\Livewire\UserDashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\ManajemenLaporan;
use App\Livewire\ManajemenUser;
use App\Livewire\Paket;
use App\Livewire\Register;
use App\Livewire\Tentang;

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    Route::get('/', Home::class)->name('home');
    Route::get('/tentang', Tentang::class)->name('about');
    Route::get('/paket', Paket::class)->name('paket');
    Route::get('/artikel', Artikel::class)->name('artikel');
    Route::get('/kontak', Kontak::class)->name('kontak');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', UserDashboard::class)->name('dashboard');

    // Menggunakan middleware admin yang sudah terdaftar
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
        Route::get('/admin/pesanan', AdminPesanan::class)->name('admin.pesanan');
        Route::get('/admin/pembayaran', AdminPembayaran::class)->name('admin.pembayaran');
        Route::get('/admin/user', ManajemenUser::class)->name('admin.user');
        Route::get('/admin/laporan', ManajemenLaporan::class)->name('admin.laporan');
    });
});

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
