<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id'
    ];

    protected $casts = [
        'name' => 'string',
        'user_id' => 'integer'
    ];

    public function savedrecipe(){
        return $this->hasMany(SavedRecipe::class);
    }
}
