<?php
namespace App\src\Quiz\Services;

use App\src\Quiz\Repositories\IQuizRepository;
use Illuminate\Http\Request;

class CreateQuizService {
    private IQuizRepository $quizRepository;

    public function __construct(
        IQuizRepository $quizRepository
    ){
        $this->quizRepository = $quizRepository;
    }

    public function execute(array $quizArray) {
        $quiz = $this->quizRepository->create($quizArray);

        return $quiz;
    }
}
