<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professor;

class Gradebook extends Model
{
    protected $fillable = [
        'name', 'professor_id'
    ];

    const STORE_RULES = [
        'name' => 'required|min:1'
    ];

    // public function professor()
    // {
    //     return $this->belongsTo(Professor::class);
    // }
}
