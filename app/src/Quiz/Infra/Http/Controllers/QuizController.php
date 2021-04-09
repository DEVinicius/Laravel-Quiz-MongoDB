<?php
namespace App\src\Quiz\Infra\Http\Controllers;

use App\Http\Controllers\Controller;
use App\src\Quiz\Infra\Database\Repositories\QuizRepository;
use App\src\Quiz\Services\CreateQuizService;
use App\src\Quiz\Services\GetQuizByIdService;
use Exception;
use Illuminate\Http\Request;

class QuizController extends Controller {
    public function create(Request $request) {
        try {
            $quizRepository = new QuizRepository();

            $createQuizService = new CreateQuizService(
                $quizRepository
            );

            $quiz = $createQuizService->execute($request->all());

            return response()->json($quiz);
        } catch (Exception $e) {
            return response()->json([
                "error" => $e->getMessage()
            ], 400);
        }
    }

    public function findQuiz(string $id) {
        try {
            $quizRepository = new QuizRepository();

            $getQuizByIdService = new GetQuizByIdService(
                $quizRepository
            );

            $quiz = $getQuizByIdService->execute($id);

            return response()->json($quiz);
        } catch (Exception $e) {
            return response()->json([
                "error" => $e->getMessage()
            ], 400);
        }
    }
}
