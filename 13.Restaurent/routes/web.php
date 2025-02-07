<?php
use App\Http\Controllers\tabeldemo;
use Illuminate\Support\Facades\Route;




Route::get('/',action:[tabeldemo::class,'index']);

Route::post('/submitform',action:[tabeldemo::class,'submitform']);
