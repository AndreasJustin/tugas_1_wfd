<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromosiController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PromosiController::class,'index'])->name('index');
