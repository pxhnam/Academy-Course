<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\CourseController;



Route::prefix('courses')->group(function () {
    Route::get('', [CourseController::class, 'list']);
    Route::get('find/{id}', [CourseController::class, 'show']);
    Route::get('check/{id}', [CourseController::class, 'check']);
});
