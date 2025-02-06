<?php

use App\Http\Controllers\studentdemo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post(uri:'/submitform',action:[studentdemo::class,'submitform']);

Route::get(uri:'/',action:[studentdemo::class,'index']);
