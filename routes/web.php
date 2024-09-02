<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/test', function () {
//    return csrf_token();
//});

Route::post('/persona', [\App\Http\Controllers\PersonaController::class, 'createPersona']);
