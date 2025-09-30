<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BladeViewController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::group([], function (){
    Route::get('lang/{lang}', [BladeViewController::class, 'language'])->name('lang');
    Route::get('/', [BladeViewController::class, 'index'])->name('home');
    Route::get('products', [BladeViewController::class, 'products'])->name('products');
    Route::get('about', [BladeViewController::class, 'about'])->name('about');
    Route::resource('orders', OrderController::class)->middleware(ProtectAgainstSpam::class);
    Route::resource('contact-us', ContactController::class)->middleware(ProtectAgainstSpam::class);

});
