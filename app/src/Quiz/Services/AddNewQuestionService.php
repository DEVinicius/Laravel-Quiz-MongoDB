<?php
namespace App\src\Quiz\Services;

use App\src\Quiz\Repositories\IQuizRepository;

class AddNewQuestionService {
    private IQuizRepository $quizRepository;

    public function __construct(
        IQuizRepository $quizRepository
    )
    {
        $this->quizRepository = $quizRepository;
    }

    public function execute(string $id, array $newQuestion) {
        $quiz = $this->quizRepository->findById($id);

        $questions = $quiz->questions;
        array_push($questions, $newQuestion);


        $newQuiz = $this->quizRepository->update($id, $questions);

        return $newQuiz;

    }
}
