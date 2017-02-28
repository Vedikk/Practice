<?php

namespace App\Http\Controllers;

use App\Providers\AuthServiceProvider;
use App\Video;
use FFMpeg\Coordinate\TimeCode;
use Illuminate\Http\Request;
use FFMpeg\FFMpeg;
use Intervention\Image\Facades\Image;


class VideoController extends Controller
{
    public function add()
    {
        return view('video_add');
    }

    public function store(Request $request)
    {

        $this->validate($request, [

            'video_name' => 'required|max:255',
            'path' => 'required'

        ]);

        $file_path = $request->file('path');

        $ffmpeg = FFMpeg::create();
        $vidFrame = $ffmpeg->open($file_path);
        $frame = $vidFrame->frame(TimeCode::fromSeconds(15));
        $frame_name = 'thumbnails/'.  md5(time()*time()) . '.jpg';
        $frame->save( $frame_name);
        Image::make($frame_name)->resize(320,240)->save($frame_name);


        $extension = $file_path->getClientOriginalExtension();
        $file_name = md5(time() * time());
        $file_path->move(public_path('videos'), $file_name . '.' . $extension);

        $data = $request->all();
        $video = new Video;
        $video->fill($data);

        $video->user_id = \Auth::user()->id ;
        $video->path = ('/videos/') . $file_name . '.' . $extension;
        $video->screenshot_path = $frame_name;


        $video->save();


        return redirect('home');


    }

    public function show()
    {

        $video = \DB::table('videos')->orderBy('created_at', 'desc')->take(10)->get();

        return view('video')->with('video', $video);


    }


}
