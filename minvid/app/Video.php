<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Video extends Model
{


    protected $fillable = array('video_name', 'user_id', 'path', 'screenshot_path');

    public function rating(){
        return Rating::where('video_id', $this->id)->avg('rating');
    }

    public function user(){
        return User::where('id', $this->user_id)->first();
    }

    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
}
