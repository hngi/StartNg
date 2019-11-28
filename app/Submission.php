<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function content(){
        return $this->belongsTo(CourseContent::class);
    }
}
