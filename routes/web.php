<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GoalController;

Route::get('/', [GoalController::class, 'index']);
