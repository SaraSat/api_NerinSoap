<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = [
        'name',
        'img',
        'description',
        'price',
        'category',
        'destacable'
    ];
}
