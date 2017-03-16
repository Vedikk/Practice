<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

    public function video(){
        return Video::where('id', $this->video_id)->first();
    }
    public function user(){
        return User::where('id',$this->user_id)->first();
    }
    protected $fillable = array('comment', 'rating', 'video_id', 'user_id');


    const CREATED_AT = 'created_at';
    const UPDATED_AT = false;

}
