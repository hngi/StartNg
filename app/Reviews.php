<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(Courses::class);
    }
}
