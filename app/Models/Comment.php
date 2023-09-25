<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    protected $fillable = [
        'recipe_id',
        'user_id',
        'rating',
        'comment'
    ];

    protected $casts = [
        'recipe_id' => 'integer',
        'user_id' => 'integer',
        'rating'  => 'integer',
        'comment'  => 'string'
    ];
}
