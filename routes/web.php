<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

// Home
Route::get("/", HomeController::class);

// Users
Route::resource("users", UserController::class);

// Not Found
Route::fallback(function () {
    return response()->json([
        "message" => "404",
    ]);
});
