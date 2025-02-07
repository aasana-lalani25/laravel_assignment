<?php
use App\Http\Controllers\collegedemo;
use Illuminate\Support\Facades\Route;




Route::get('/',action:[collegedemo::class,'index']);

Route::post('/submitform',action:[collegedemo::class,'submitform']);
