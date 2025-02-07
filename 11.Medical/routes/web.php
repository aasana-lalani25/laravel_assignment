<?php
use App\Http\Controllers\meedicaldemo;
use Illuminate\Support\Facades\Route;



Route::get('/',action:[meedicaldemo::class,'index']);

Route::post('/submitform',action:[meedicaldemo::class,'submitform']);
