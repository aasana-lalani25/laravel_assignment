<?php
use App\Http\Controllers\policydemo;
use Illuminate\Support\Facades\Route;




Route::get('/',action:[policydemo::class,'index']);

Route::post('/submitform',action:[policydemo::class,'submitform']);
