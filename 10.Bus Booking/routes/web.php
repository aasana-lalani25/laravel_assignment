<?php
use App\Http\Controllers\busdemo;
use Illuminate\Support\Facades\Route;


Route::get('/',action:[busdemo::class,'index']);

Route::post('/submitform',action:[busdemo::class,'submitform']);
