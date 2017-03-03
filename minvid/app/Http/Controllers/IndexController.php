<?php

namespace App\Http\Controllers;

use App\Rating;
use App\User;
use App\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $orderBy = 'created_at';

        $videos = \DB::table('videos')
            ->leftJoin('users', 'videos.user_id', '=', 'users.id')
            ->select('users.id', 'users.name', 'videos.*')
            ->orderBy('created_at', 'desc')
            ->take(8)
            ->get();


        return view('welcome', array('videos'=> $videos));
    }
}
