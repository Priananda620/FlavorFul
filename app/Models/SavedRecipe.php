<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedRecipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'user_id',
        'collection_id'
    ];

    protected $casts = [
        'recipe_id' => 'integer',
        'user_id' => 'integer',
        'collection_id' => 'integer'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }

    public function collection(){
        return $this->belongsTo(Collection::class);
    }
}
