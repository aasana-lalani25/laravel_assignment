<?php

use App\Http\Controllers\moviedemo;
use Illuminate\Support\Facades\Route;

Route::get('/',action:[moviedemo::class,'index']);

Route::post('/submitform',action:[moviedemo::class,'submitform']);
