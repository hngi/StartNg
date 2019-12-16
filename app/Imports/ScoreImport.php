<?php

namespace App\Imports;

use App\Submission;
use App\CourseContent;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ScoreImport implements ToModel, WithHeadingRow
{
    private $content;

    public function __construct(CourseContent $content) {
        $this->content = $content;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function model(array $row)
    {
        $content = 1;
        return new Submission([
            'user_id' => $row[0],
            'score' => $row[1]
        ]);
    }
}
