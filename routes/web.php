<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BladeViewController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::group([], function (){
    Route::get('/', [BladeViewController::class, 'index'])->name('home');
    Route::get('about', [BladeViewController::class, 'about'])->name('about');
    Route::resource('orders', OrderController::class)->middleware(ProtectAgainstSpam::class);
    Route::resource('contact-us', ContactController::class)->middleware(ProtectAgainstSpam::class);

});
