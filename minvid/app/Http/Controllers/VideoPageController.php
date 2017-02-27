<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoPageController extends Controller
{
    public function show($id){

        $video = \DB::table('videos')->where('id',$id)->first();

        return view('video')->with('video', $video);

    }
}
