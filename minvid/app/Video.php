<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Video extends Model
{


    protected $fillable = array('video_name', 'user_id', 'path', 'screenshot_path');



    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
}
