<?php

use App\Http\Controllers\Admin\{AdminController, ProductController, CategoryController, OrderController, CustomerController};
use App\Http\Controllers\{CartController, HomeController, CheckoutController, AuthController, FeedbackController};
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/login', [AdminController::class, 'postlogin'])->name('postlogin');

    Route::middleware('auth')->group(function () {
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::prefix('category')->name('category.')->group(function () {
            Route::get('/', [CategoryController::class, 'list'])->name('list');
            Route::get('/add', [CategoryController::class, 'add'])->name('add');
            Route::post('/store', [CategoryController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [CategoryController::class, 'update'])->name('update');
            Route::delete('/{id}/delete', [CategoryController::class, 'delete'])->name('delete');
        });

        Route::prefix('product')->name('product.')->group(function () {
            Route::get('/', [ProductController::class, 'list'])->name('list');
            Route::get('/gallery', [ProductController::class, 'gallery'])->name('gallery');
            Route::get('/add', [ProductController::class, 'add'])->name('add');
            Route::post('/store', [ProductController::class, 'store'])->name('store');
            Route::get('/{id}/edit-info', [ProductController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [ProductController::class, 'update'])->name('update');
            Route::delete('/{id}/delete', [ProductController::class, 'delete'])->name('delete');
            Route::get('/{id}/edit-gallery', [ProductController::class, 'edit_gallery'])->name('edit_gallery');
            Route::put('/{id}/update-gallery', [ProductController::class, 'update_gallery'])->name('update_gallery');
        });

        Route::prefix('order')->name('order.')->group(function () {
            Route::get('/', [OrderController::class, 'list'])->name('list');
            Route::get('/{id}', [OrderController::class, 'detail'])->name('detail');
            Route::post('/{id}/update-status', [OrderController::class, 'update_status'])->name('update_status');
            Route::delete('/{orderId}', [OrderController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('customer')->name('customer.')->group(function () {
            Route::get('/', [CustomerController::class, 'list'])->name('list');
            Route::delete('/{id}', [CustomerController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('feedback')->name('feedback.')->group(function () {
            Route::get('/', [FeedbackController::class, 'list'])->name('list');
            Route::delete('/{id}', [FeedbackController::class, 'destroy'])->name('destroy');
        });
    });
});


Route::prefix('')->name('')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/introduce', [HomeController::class, 'introduce'])->name('introduce');
    Route::get('/agent-system', [HomeController::class, 'agentSystem'])->name('agentSystem');
    Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
    Route::post('/contact-us', [FeedbackController::class, 'submit'])->name('contact.submit');

    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/return-policy', [HomeController::class, 'returnPolicy'])->name('returnPolicy');
    Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');
    Route::get('/term', [HomeController::class, 'term'])->name('term');
    Route::get('/why-choose-us', [HomeController::class, 'whyChooseUs'])->name('whyChooseUs');
    Route::get('/order-process', [HomeController::class, 'orderProcess'])->name('orderProcess');
    Route::get('/leading-quality-and-prestige-garment-company', [HomeController::class, 'leadingQualityAndPrestigeGarmentCompany'])->name('leadingCompany');
    Route::get('/manufacturing-on-demand-premium-bags-nationwide', [HomeController::class, 'manufacturingOnDemandPremiumBagsNationwide'])->name('manufacturingBags');

    Route::prefix('')->name('auth.')->group(function () {
        Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login']);
        Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::put('/profile', [AuthController::class], 'profile')->name('profile');
        Route::post('/profile/change-password', [AuthController::class, 'changePassword'])->name('changePassword');
        Route::post('/profile/change-name', [AuthController::class, 'changeName'])->name('changeName');
        Route::post('/profile/change-phone', [AuthController::class, 'changePhone'])->name('changePhone');

        Route::post('/login/a', [AuthController::class, 'forgotPassword'])->name('forgot.password');

        Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
        Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/details/{id}', [ProductController::class, 'show'])->name('show');
        Route::get('/search', [ProductController::class, 'search'])->name('search');
    });

    Route::prefix('cart')->name('cart.')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index');
        Route::post('/add-to-cart/{id}', [CartController::class, 'add'])->name('add');
        Route::post('/remove/{id}', [CartController::class, 'remove'])->name('remove');
        Route::put('/update/{id}', [CartController::class, 'update'])->name('update');
        Route::post('/clear', [CartController::class, 'clear'])->name('clear');
    });

    Route::prefix('checkout')->name('checkout.')->group(function () {
        Route::get('/shipping-details', [CheckoutController::class, 'shipping'])->name('shipping');
        Route::post('/shipping-details-confirm', [CheckoutController::class, 'confirmShipping'])->name('confirm_shipping');
        Route::get('/payment-methods', [CheckoutController::class, 'payment'])->name('payment');
        Route::post('/payment-methods', [CheckoutController::class, 'confirmPayment'])->name('confirm_payment');
        Route::get('/thank-you', [CheckoutController::class, 'complete'])->name('complete');
        Route::post('/thank-you', [CheckoutController::class, 'destroy'])->name('destroy');
        Route::get('/your-order', [CheckoutController::class, 'viewOrders'])->name('viewOrders');
    });
});
