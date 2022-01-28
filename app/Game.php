<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //Mass assignment
    protected $fillable = [
        'title',
        'slug',
        'author',
        'console',
        'price',
        'status',
        'image',
    ];
}
