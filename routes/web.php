<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/site.webmanifest', function () {
    return response()->file(public_path('site.webmanifest'), [
        'Content-Type' => 'application/manifest+json',
    ]);
});
