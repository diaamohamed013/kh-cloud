<?php

use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.pages.products.eduMeeting');
});

Route::as('site.')->group(function(){
    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::get('home', [HomeController::class,'index'])->name('home');
    Route::get('about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
    Route::get('features', [HomeController::class, 'features'])->name('features');
    Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
    Route::get('products', [ProductsController::class, 'index'])->name('products');
    Route::get('products/product_subscribe', [ProductsController::class, 'product_subscribe'])->name('products.product_subscribe');
    Route::get('products-features', [ProductsController::class, 'features'])->name('products.features');
    Route::get('contact-us', [ContactController::class, 'index'])->name('contactUs');
});
