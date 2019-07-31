<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentImage extends Model
{
    protected $fillable = [
        'image','student_id'
    ];
}
