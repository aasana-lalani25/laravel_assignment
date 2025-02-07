<?php
use App\Http\Controllers\onlinedemo;
use Illuminate\Support\Facades\Route;




Route::get('/',action:[onlinedemo::class,'index']);

Route::post('/submitform',action:[onlinedemo::class,'submitform']);
