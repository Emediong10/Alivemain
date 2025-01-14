<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $casts = [
        'skills' => 'array'
    ];

    protected $guarded = [];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
