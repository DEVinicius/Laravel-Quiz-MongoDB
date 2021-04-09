<?php
namespace App\src\Quiz\Repositories;

interface IQuizRepository {
    public function create(array $quiz);
    public function findById(string $id);
}
