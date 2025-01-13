<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::post('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
Route::delete('/cars/{car}/destroy', [CarController::class, 'destroy'])->name('cars.destroy');

Route::resource('testimonials', TestimonialController::class)->names('testimonials');  // Resourceful route
