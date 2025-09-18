<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

Route::get('/', function () {
    return view('welcome');
});

Route::group([], function (){
    Route::resource('contact-us', ContactController::class)->middleware(ProtectAgainstSpam::class);
});
