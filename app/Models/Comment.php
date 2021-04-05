<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'comment',
        'upvotes',
        'downvotes'
    ];

    public function movie() {
        return $this->belongsToMany(Movie::class);
    }
    
}