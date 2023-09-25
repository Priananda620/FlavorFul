<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeLike extends Model
{
    use HasFactory;


    protected $fillable = [
        'recipe_id',
        'user_id'
    ];

    protected $casts = [
        'recipe_id' => 'integer',
        'user_id' => 'integer'
    ];
}
