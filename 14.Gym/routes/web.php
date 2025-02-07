<?php
use App\Http\Controllers\gymdemo;
use Illuminate\Support\Facades\Route;




Route::get('/',action:[gymdemo::class,'index']);

Route::post('/submitform',action:[gymdemo::class,'submitform']);
