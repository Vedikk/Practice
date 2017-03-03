<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'comment', 'rating'
    ];
    const UPDATED_AT = false;
}
