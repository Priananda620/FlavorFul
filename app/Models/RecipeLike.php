<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeLike extends Model
{
    use HasFactory;


    protected $fillable = [
        'recipe_id',
        'user_id',
        'like'
    ];

    protected $casts = [
        'recipe_id' => 'integer',
        'user_id' => 'integer',
        'like' => 'boolean'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }
}
