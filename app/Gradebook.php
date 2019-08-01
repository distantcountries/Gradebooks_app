<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Professor;

class Gradebook extends Model
{
    protected $fillable = [
        'name', 'user_id'
   
    ];

    const STORE_RULES = [
        'name' => 'required|min:1'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
