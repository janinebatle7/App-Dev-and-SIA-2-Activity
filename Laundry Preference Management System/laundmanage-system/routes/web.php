<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaundryItemController;

Route::resource('laundry', LaundryItemController::class);