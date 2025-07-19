<?php

use App\Http\Controllers\Admin\adminController;
use Illuminate\Support\Facades\Route;

Route::get('/bus', [adminController::class, 'index']);
Route::get('/bus/create', [adminController::class, 'create']);
Route::post('/bus/save', [adminController::class, 'save']);
Route::delete('/bus/{id}', [adminController::class, 'delete']);

