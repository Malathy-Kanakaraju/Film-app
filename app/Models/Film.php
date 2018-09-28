<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Film extends Model
{
    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
