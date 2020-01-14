<?php

namespace App\Imports;

use App\Submission;
use App\CourseContent;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ScoreImport implements ToModel
{
    /*private $content;

    public function __construct(CourseContent $content) {
        $this->content = $content;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function model(array $row)
    {
        return new Submission([
            'user_id' => $row[0],
            'score' => $row[1],
        ]);
    }
}
