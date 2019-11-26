<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function registered(){
        return $this->hasMany(RegisteredCourses::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function contents(){
        return $this->hasMany(CourseContent::class);
    }

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }

    public function resources(){
        return $this->hasMany(Resources::class);
    }
}
