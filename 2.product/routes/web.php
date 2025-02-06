<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productdemo;


Route::post('/submitform',action:[productdemo::class ,'submitform']);
Route::get('/',action:[productdemo::class,'index']);
 