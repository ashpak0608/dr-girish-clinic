<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InquiryController;

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/locations', [HomeController::class, 'locations'])->name('locations');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/appointment/book', [HomeController::class, 'bookAppointment'])->name('appointment.book');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::middleware(['admin'])->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/inquiries', [InquiryController::class, 'index'])->name('admin.inquiries.index');
        Route::get('/inquiries/{inquiry}', [InquiryController::class, 'show'])->name('admin.inquiries.show');
        Route::delete('/inquiries/{inquiry}', [InquiryController::class, 'destroy'])->name('admin.inquiries.destroy');
        Route::post('/inquiries/{inquiry}/mark-read', [InquiryController::class, 'markAsRead'])->name('admin.inquiries.mark-read');
    });
});