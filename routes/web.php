<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ArticleController as UserArticleController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PackageController;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\User\Dashboard as UserDashboard;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    Route::get('/', [HomeController::class, 'index'])->name('user.home.index');
    Route::get('/paket', [PackageController::class, 'index'])->name('user.package.index');
    Route::get('/artikel', [UserArticleController::class, 'index'])->name('user.article.index');
    Route::get('/kontak', [ContactController::class, 'index'])->name('user.contact.index');
    Route::get('/tentang', [AboutController::class, 'index'])->name('user.about.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', UserDashboard::class)->name('dashboard');

    // Menggunakan middleware admin yang sudah terdaftar
    Route::middleware('admin')->group(function () {
        // Dashboard Route
        Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');

        // Artikel Route
        Route::get('/admin/articles', [ArticleController::class, 'index'])->name('admin.articles.index');
        Route::get('/admin/articles/create', [ArticleController::class, 'create'])->name('admin.articles.create');
        Route::get('/admin/articles/{id}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');
        Route::get('/admin/articles/{id}/show', [ArticleController::class, 'show'])->name('admin.articles.show');

        // Banners Route
        Route::get('/admin/banners', [BannerController::class, 'index'])->name('admin.banners.index');
        Route::get('/admin/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
        Route::get('/admin/banners/{id}/edit', [BannerController::class, 'edit'])->name('admin.banners.edit');

        // User Route
        Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    });
});

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
