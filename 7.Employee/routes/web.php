<?php

use App\Http\Controllers\employeedemo;
use Illuminate\Support\Facades\Route;

Route::get('/', action:[employeedemo::class,'index']);
Route::post('/submitform', action:[employeedemo::class,'submitform']);
