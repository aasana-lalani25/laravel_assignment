<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hoteldemo;

Route::get('/',action:[hoteldemo::class,'index']);

Route::post('/submitform',action:[hoteldemo::class,'submitform']);


