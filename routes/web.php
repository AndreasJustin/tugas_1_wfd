<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomepageController::class,'index'])->name('index');
Route::get('/about',[HomepageController::class,'about'])->name('about');
Route::get('/catalog',[HomepageController::class,'catalog'])->name('catalog');
