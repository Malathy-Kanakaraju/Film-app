<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Genre;

class Film extends Model
{
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    
    public function genres() {
        return $this->belongsToMany(Genre::class);
    }
}
