<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('users/show', [UsersController::class, 'show']);
Route::get('users/pdf', [UsersController::class, 'createPDF']);
