<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


Route::get('users', [UserController::class, 'index']);
Route::get('users/by-role', [UserController::class, 'byRole']);
Route::get('users/stats', [UserController::class, 'stats']);