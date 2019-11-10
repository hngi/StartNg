<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
     protected $fillable = [
        'title', 'description', 'duration'
    ];
}

