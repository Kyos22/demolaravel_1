<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::group([], function() {
    Route::get('/',[HomeController::class, 'index']);
});
