<?php

use App\Http\Controllers\customerdemo;
use Illuminate\Support\Facades\Route;

Route::get('/',action:[customerdemo::class,'index']);
Route::post('/submitform',action:[customerdemo::class,'submitform']);
