<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('root');
Route::get('/radiotherapy-accessories', function () {
    return view('RadiotherapyAccessories');
})->name('Radiotherapy_Accessories');
Route::get('/immobolization', function () {
    return view('immobolization');
})->name('immobolization');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/products', function () {
    return view('research-development');
})->name('products');

Route::get('/nuclear-medicine', function () {
    return view('Nuclear_Medicine');
})->name('Nuclear_Medicine');

Route::get('/Radiotherapy', function () {
    return view('Radiotherapy');
})->name('Radiotherapy');

Route::get('/Breast-Imaging', function () {
    return view('BreastImaging');
})->name('Breast-Imaging');

Route::get('/Personal-Dosimetry', function () {
    return view('PersonalDosimetry');
})->name('Personal-Dosimetry');

Route::get('/about-us', function () {
    return view('about');
})->name('about-us');
Auth::routes();
Route::post('contact/email', 'App\Http\Controllers\EmailController@contactEmail')->name('contact.email');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
