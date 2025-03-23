<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\MidtransNotificationController;
use App\Http\Controllers\Admin\PackageController as AdminPackageController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WeddingController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\PaymentController as ControllersPaymentController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ArticleController as UserArticleController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PackageController;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\User\Dashboard as UserDashboard;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/checkout', function () {
    return view('payment.checkout-form');
})->name('checkout.form');

Route::post('/midtrans/create', [MidtransController::class, 'createTransaction'])->name('midtrans.create');

// Notification handler
Route::post('/midtrans/notification', [MidtransController::class, 'notificationHandler'])->name('midtrans.notification');

// Halaman redirect
Route::get('/midtrans/finish', [MidtransController::class, 'finishRedirect'])->name('midtrans.finish');
Route::get('/midtrans/unfinish', [MidtransController::class, 'unfinishRedirect'])->name('midtrans.unfinish');
Route::get('/midtrans/error', [MidtransController::class, 'errorRedirect'])->name('midtrans.error');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    Route::get('/', [HomeController::class, 'index'])->name('user.home.index');
    Route::get('/paket', [PackageController::class, 'index'])->name('user.package.index');
    Route::get('/artikel', [UserArticleController::class, 'index'])->name('user.article.index');
    Route::get('/artikel/{slug}/show', [UserArticleController::class, 'show'])->name('user.article.show');
    Route::get('/kontak', [ContactController::class, 'index'])->name('user.contact.index');
    Route::get('/tentang', [AboutController::class, 'index'])->name('user.about.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', UserDashboard::class)->name('dashboard');

    // Menggunakan middleware admin yang sudah terdaftar
    Route::middleware('admin')->group(function () {
        // Dashboard Route
        Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');

        // Paket Route
        Route::get('/admin/packages', [AdminPackageController::class, 'index'])->name('admin.packages.index');
        Route::get('/admin/packages/create', [AdminPackageController::class, 'create'])->name('admin.packages.create');
        Route::get('/admin/packages/{id}/edit', [AdminPackageController::class, 'edit'])->name('admin.packages.edit');
        Route::get('/admin/packages/{id}/show', [AdminPackageController::class, 'show'])->name('admin.packages.show');

        // Wedding Route
        Route::get('/admin/weddings', [WeddingController::class, 'index'])->name('admin.wedding.index');
        // Route::get('/admin/weddings/create', [WeddingController::class, 'create'])->name('admin.wedding.create');
        // Route::get('/admin/weddings/{id}/edit', [WeddingController::class, 'edit'])->name('admin.wedding.edit');

        // Payment Route
        Route::get('/admin/payments', [PaymentController::class, 'index'])->name('admin.payment.index');
        // Route::get('/admin/payments/create', [PaymentController::class, 'create'])->name('admin.payment.create');
        // Route::get('/admin/payments/{id}/edit', [PaymentController::class, 'edit'])->name('admin.payment.edit');

        // Testimoni Route
        Route::get('/admin/testimonials', [TestimonialController::class, 'index'])->name('admin.testimonial.index');
        // Route::get('/admin/testimonials/create', [TestimonialController::class, 'create'])->name('admin.testimonial.create');
        // Route::get('/admin/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('admin.testimonial.edit');

        // Midtrans Notification Route
        Route::post('/admin/midtrans-notification', [MidtransNotificationController::class, 'index'])->name('midtrans.notification.index');

        // Artikel Route
        Route::get('/admin/articles', [ArticleController::class, 'index'])->name('admin.articles.index');
        Route::get('/admin/articles/create', [ArticleController::class, 'create'])->name('admin.articles.create');
        Route::get('/admin/articles/{id}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');
        Route::get('/admin/articles/{id}/show', [ArticleController::class, 'show'])->name('admin.articles.show');

        // Banners Route
        Route::get('/admin/banners', [BannerController::class, 'index'])->name('admin.banners.index');
        Route::get('/admin/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
        Route::get('/admin/banners/{id}/edit', [BannerController::class, 'edit'])->name('admin.banners.edit');
        Route::get('/admin/banners/{id}/show', [BannerController::class, 'show'])->name('admin.banners.show');

        // User Route
        Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');

        // Setting Route
        Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.settings.index');
    });
});

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
