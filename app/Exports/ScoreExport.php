<?php

namespace App\Exports;

use App\Submission;
use Maatwebsite\Excel\Concerns\FromCollection;

class ScoreExport implements FromCollection
{
    protected $id;

    function __construct($id) {
        $this->id = $id;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Submission::where('course_content_id', $this->id)->get()([
            'file',
            'user_id',
            'score'
        ]);
    }
}
