<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

    Route::get('/',[MainController::class,'index'])->name('main.index');

    Route::get('/customers',[MainController::class,'customers_list'])->name('customers.index');

