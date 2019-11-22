<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
     protected $fillable = [
        'title', 'description', 'duration'
    ];

    public function content(){
        return $this->belongsTo(CourseContent::class);
    }
    
    public function submissions(){
        return $this->hasMany(Submissions::class);
    }
}

