<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/services', function () {
    return view('services', ['title' => 'Our Services']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

Route::post('/submit', [ContactController::class, 'contactPost'])->name('submit');


