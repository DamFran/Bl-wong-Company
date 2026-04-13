<?php

use App\Http\Controllers\CompanyProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyProfileController::class, 'index']);
