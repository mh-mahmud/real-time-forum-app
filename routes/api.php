<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReplyController;

Route::apiResource('/question', QuestionController::class);
Route::apiResource('/category', CategoryController::class);
Route::apiResource('/question/{question}/reply', ReplyController::class);