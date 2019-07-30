<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content', 'user_id', 'gradebook_id' //ili professor
    ];

    const STORE_RULES = [
        'brand' => 'required|min:1',
    ];
}
