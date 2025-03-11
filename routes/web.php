<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromosiController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('promosi',[PromosiController::class,'index']);
