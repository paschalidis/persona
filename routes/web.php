<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/test', function () {
//    return csrf_token();
//});

Route::post('/submission', [\App\Http\Controllers\SubmissionController::class, 'create']);
