<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gradebook extends Model
{
    protected $fillable = [
        'name'
    ];

    const STORE_RULES = [
        'name' => 'required|min:1'
    ];
}
