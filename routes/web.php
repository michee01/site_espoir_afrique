<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ContactController;

Route::get('/', function () {

    return view('pages.home');
    
})->name('home');

Route::get('/apropos', function () {

    return view('pages.apropos');

})->name('apropos');

Route::get('/services', function () {

    return view('pages.services');

})->name('services');

Route::get('/greenkin', function () {

    return view('pages.services');

})->name('greenkin');


Route::get('/contact', function () {

    return view('pages.contact');
 
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
