<?php

use Karterpaul\Inspire\Controllers\InspirationController;
use Illuminate\Support\Facades\Route;

//Route::get('inspire', [InspirationController::class,'index']);
Route::get('inspire', InspirationController::class);
