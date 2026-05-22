<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BilletController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('billets',BilletController::class);
