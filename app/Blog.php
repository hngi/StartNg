<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // Table Name
    protected $table = 'blogs';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
