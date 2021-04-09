<?php
namespace App\src\Quiz\Services;

use App\src\Quiz\Repositories\IQuizRepository;

class GetQuizByIdService {
    private IQuizRepository $quizRepository;

    public function __construct(
        IQuizRepository $quizRepository
    )
    {
        $this->quizRepository = $quizRepository;
    }

    public function execute(string $id) {
        $quiz = $this->quizRepository->findById($id);

        return $quiz;
    }
}
