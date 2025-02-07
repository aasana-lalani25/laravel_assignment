<?php
use App\Http\Controllers\cardemo;
use Illuminate\Support\Facades\Route;




Route::get('/',action:[cardemo::class,'index']);

Route::post('/submitform',action:[cardemo::class,'submitform']);
