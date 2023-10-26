<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'edamamId',
        'popularity_score'
    ];

    protected $casts = [
        'title' => 'string',
        'edamamId' => 'string',
        'popularity_score' => 'integer'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function recipeLike(){
        return $this->hasMany(RecipeLike::class);
    }
}
