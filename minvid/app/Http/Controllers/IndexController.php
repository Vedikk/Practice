<?php

namespace App\Http\Controllers;

use App\Rating;
use App\User;
use App\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {

        $count = 8;

        if ($request->ajax()) {
            $count += 4;
            var_dump($count);
            $videos = Video::leftJoin('users', 'videos.user_id', '=', 'users.id')
                ->select('users.id', 'users.name', 'videos.*')
                ->orderBy('created_at', 'desc')
                ->take($count)
                ->get();

        }

        $videos = Video::leftJoin('users', 'videos.user_id', '=', 'users.id')
            ->select('users.id', 'users.name', 'videos.*')
            ->orderBy('created_at', 'desc')
            ->take($count)
            ->get();




        return view('welcome', array(
            'videos' => $videos,

        ));

    }

}
