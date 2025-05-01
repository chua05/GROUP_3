<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\StudentRegistrationController;
use App\Http\Controllers\Api\BorrowBookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class); 
Route::apiResource('admins', AdminController::class);
Route::apiResource('student_registrations', StudentRegistrationController::class);
Route::apiResource('borrow_books', BorrowBookController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
