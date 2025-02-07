<?php
use App\Http\Controllers\traveldemo;
use Illuminate\Support\Facades\Route;




Route::get('/',action:[traveldemo::class,'index']);

Route::post('/submitform',action:[traveldemo::class,'submitform']);
