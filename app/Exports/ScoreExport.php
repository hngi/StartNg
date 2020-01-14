<?php

namespace App\Exports;

use App\Submission;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class ScoreExport implements FromCollection
{
    protected $content;

    function __construct($content) {
            $this->content = $content;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Submission::where('course_content_id', $this->content)->get([
            'user_id',
            'score',
            'file',
        ]);
    }
}
