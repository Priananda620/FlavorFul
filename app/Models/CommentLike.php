<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment_id',
        'like'
    ];

    protected $casts = [
        'user_id' => 'integer',
        'comment_id' => 'integer',
        'like' => 'boolean'
    ];
}
