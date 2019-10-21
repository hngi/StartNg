<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Table Name
    protected $table = 'courses';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
