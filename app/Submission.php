<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function assignment(){
        return $this->belongsTo(Assignment::class);
    }
}
