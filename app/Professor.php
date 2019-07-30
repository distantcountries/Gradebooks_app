<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gradebook;

class Professor extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'email', 'image'
    ];
    
    public function gradebook()
    {
        return $this->hasOne(Gradebook::class);
    }
}
