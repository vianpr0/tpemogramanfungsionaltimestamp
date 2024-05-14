<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Timestamp;

Route::get('/timestamp', [Timestamp::class, 'convertTimestamp']);
