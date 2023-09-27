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

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }

    public function commentLike(){
        return $this->hasMany(CommentLike::class);
    }
}
