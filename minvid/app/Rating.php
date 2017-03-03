<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

   protected $fillable = array('comment', 'rating');


    const CREATED_AT = 'created_at';
    const UPDATED_AT = false;

}
