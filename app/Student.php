<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'gradebook_id'
    ];

    public function gradebook()
    {
        return $this->belongsTo(Gradebook::class);
    }
}
