<?php
namespace App\src\Quiz\Repositories;

interface IQuizRepository {
    public function create(array $quiz);
    public function findById(string $id);
    public function update(string $id, array $newQuiz);
    public function delete(string $id);
}
