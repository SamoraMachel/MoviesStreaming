<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'releaseYear',
        'runningTime',
        'age',
        'coverPic',
        'quality',
        'video',
        'rating',
        'status',
        'views',
        'trailer'
    ];

    public function comments() {
        return $this->belongsToMany(Comment::class);
    }

    public function genre() {
        return $this->belongsToMany(Genre::class);
    }
}
