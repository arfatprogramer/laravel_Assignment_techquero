<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hotel;


Route::get('/hotel',[hotel::class,'hotelListing']);
Route::get('/food',[hotel::class,'foodListing']);
Route::get('/',[hotel::class,'dashbord']);
