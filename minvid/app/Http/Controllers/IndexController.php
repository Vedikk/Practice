<?php

namespace App\Http\Controllers;

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
            ->get();

        return view('welcome', array('videos'=> $videos));
    }
}
