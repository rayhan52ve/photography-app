<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function photographies(){
        return $this->hasMany(Photography::class);
    }
}
