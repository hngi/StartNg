<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
     protected $fillable = [
        'description', 'filename', 'mine', 'name'
    ];
}
