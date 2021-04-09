<?php
namespace App\src\Quiz\Infra\Database\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Quiz extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = [
        "quizName",
        "questions"
    ];

}
