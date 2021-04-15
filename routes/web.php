<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;



Route::get('/', function () {
    return view('home');
});

Route::get('home',[MessageController::class,'index']);
Route::get('message/{values}',[MessageController::class, 'Messageview']);

