<?php

namespace App\Http\Controllers;

use App\Providers\AuthServiceProvider;
use App\Video;
use Illuminate\Http\Request;

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
        $extension = $file_path->getClientOriginalExtension();
        $file_name = md5(time() * time());
        $file_path->move(public_path('videos'), $file_name . '.' . $extension);
        $ulr = $file_path->getClientOriginalName();

        $data = $request->all();
        $video = new Video;
        $video->fill($data);
        $video->user_id = \Auth::user()->id;
        $video->path = ('/videos/') . $file_name . '.' . $extension;
        $video->save();

        /*************************/


        /******************************/


        return redirect('home');


    }

    public function show()
    {

        $video = \DB::table('videos')->orderBy('created_at', 'desc')->take(10)->get();

        return view('video')->with('video', $video);


    }


}
