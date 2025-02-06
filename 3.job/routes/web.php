<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobdemo;

Route::post('/submitform',action:[jobdemo::class,'submitform']);

Route::get('/',action:[jobdemo::class,'index']);
