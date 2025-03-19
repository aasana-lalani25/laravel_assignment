<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyListingController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('property',PropertyListingController::class);
