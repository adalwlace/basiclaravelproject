<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    //Title, Director, Genre, Release Date
    protected $fillable = [
        'title',
        'director',
        'genre',
        'release_date'
    ];
}
