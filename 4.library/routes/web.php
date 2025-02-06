<?php

use App\Http\Controllers\libdemo;
use Illuminate\Support\Facades\Route;

Route::get('/',action:[libdemo::class, 'index']);
Route::post('/submitform',action:[libdemo::class,'submitform']);
