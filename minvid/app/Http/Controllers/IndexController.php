<?php

namespace App\Http\Controllers;

use App\Rating;
use App\User;
use App\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $videos = Video::leftJoin('users', 'videos.user_id', '=', 'users.id')
            ->select('users.id', 'users.name', 'videos.*')
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        //$comments_count = Video::rating->comment->count()->get();


        return view('welcome', array(
            'videos' => $videos,
            //'comments_count'=>$comments_count
        ));

    }

}
