<?php
namespace App\src\Quiz\Infra\Database\Repositories;

use App\src\Quiz\Infra\Database\Models\Quiz;
use App\src\Quiz\Repositories\IQuizRepository;

class QuizRepository implements IQuizRepository {
    public function create(array $quizArray)
    {
        $quiz = Quiz::create($quizArray);

        return $quiz;
    }

    public function findById(string $id)
    {
        return Quiz::where("_id", $id)->first();
    }

    public function update(string $id, array $newQuiz)
    {
        $quiz = Quiz::find($id);

        $quiz->questions = $newQuiz;

        $quiz->save();

        return $quiz;
    }

    public function delete(string $id) {
        $quiz = Quiz::where("_id", $id)->first();
        $quiz->delete();
    }
}
