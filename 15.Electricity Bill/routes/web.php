<?php
use App\Http\Controllers\billdemo;
use Illuminate\Support\Facades\Route;




Route::get('/',action:[billdemo::class,'index']);

Route::post('/submitform',action:[billdemo::class,'submitform']);
