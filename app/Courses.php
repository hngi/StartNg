<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Courses extends Model
{


    protected $guarded = [];


    static function theList()
    {
        return self::where('user_id',Auth::user()->id)->pluck('title', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function reviews(){
        return $this->hasMany(Reviews::class);
    }

    public function contents(){
        return $this->hasMany(CourseContent::class);
    }
}
