<?php
namespace App\src\Quiz\Infra\Http\Routes;

use App\src\Quiz\Infra\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::post("/", [QuizController::class, "create"]);
Route::get("/{id}", [QuizController::class, "findQuiz"]);
Route::put("/newQuestion/{id}", [QuizController::class, "addNewQuestion"]);
Route::delete("/{id}", [QuizController::class, "delete"]);
