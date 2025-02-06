<?php

use App\Http\Controllers\eventdemo;
use Illuminate\Support\Facades\Route;

Route::get('/',action:[eventdemo::class,'index']);
Route::post('/submitform',action:[eventdemo::class,'submitform']);
