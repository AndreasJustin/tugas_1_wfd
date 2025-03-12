<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomepageController::class,'index'])->name('index');
Route::get('/about',[AboutController::class,'index'])->name('about');
