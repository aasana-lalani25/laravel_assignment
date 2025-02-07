<?php
use App\Http\Controllers\waterdemo;
use Illuminate\Support\Facades\Route;




Route::get('/',action:[waterdemo::class,'index']);

Route::post('/submitform',action:[waterdemo::class,'submitform']);
