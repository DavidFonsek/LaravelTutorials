<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
//Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");
Route::get('/about', function () {
    return view('home.about')
        ->with("title", "About us - online store")
        ->with("subtitle", "About us")
        ->with("description", "This is an about page...")
        ->with("author", "Developed by: David Fonsek");
})->name('home.about');

Route::get('/contact', 'App\Http\Controllers\HomeController@contact')->name('home.contact');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::get('/products/create-success', function () {
    return view("product.create_success");
})->name("product.create_success");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');

Route::get('/login', function () {
    return view('welcome');
})->name('login');