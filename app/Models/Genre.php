<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genreName'
    ];

    public function movie() {
        return $this->belongsToMany(Movie::class); 
    }

    public function series() {
        return $this->belongsToMany(Series::class);
    }
}
