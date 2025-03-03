<?php

use App\Http\Controllers\jobcontroller;
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



Route::get('/',[jobcontroller::class ,'home']);

Route::get('/jobs',[jobcontroller::class ,'jobs']);

Route::get('/apply',[jobcontroller::class ,'apply']);

Route::post('/submitform',[jobcontroller::class,'submitform']);

