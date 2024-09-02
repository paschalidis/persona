<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Hello world';
});

Route::post('/submission', [\App\Http\Controllers\SubmissionController::class, 'create']);
