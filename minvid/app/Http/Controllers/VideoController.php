<?php

namespace App\Http\Controllers;

use App\Providers\AuthServiceProvider;
use App\Video;
use Illuminate\Http\Request;


class VideoController extends Controller
{
    public function add(){
        return view('video_add');
    }
    public function store(Request $request){

        $this->validate($request, [

            'video_name'=> 'required|max:255',
            'path'=> 'required'

        ]);

        foreach ($request->file() as $files){
            foreach ($files as $file) {
                $file->move(public_path('videos'), $file->getClientOriginalName());
                $ulr = $file->getClientOriginalName();
            }
        }

        $data = $request->all();
        $video = new Video();
        $video->fill($data);
        $video->user_id=\Auth::user()->id;
        $video->path= ('/videos/')  . $ulr;
        $video->save();





        return redirect('home');
    }
}
