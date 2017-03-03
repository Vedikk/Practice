<?php

namespace App\Http\Controllers;

use App\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoPageController extends Controller
{
    public function show($id)
    {

        $video = \DB::table('videos')->where('id', $id)->first();

        $rating = \DB::table('ratings')
            ->leftJoin('users', 'ratings.user_id', '=', 'users.id')
            ->leftJoin('videos', 'ratings.video_id', '=', 'videos.id')
            ->select('ratings.*', 'users.name', 'users.avatar', 'videos.video_name')
            ->where('ratings.video_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

//            \DB::table('ratings')->where('video_id', $id)->get();
        return view('video', array('video' => $video,
            'rating' => $rating));
    }

    public function storeComment(Request $request, $id){
        $this->validate($request, [

            'comment' => 'required|max:255'
        ]);

        //$data =$request->all();
        $comment = $request->comment;
        $rating  = $request->rating;


       \DB::table('ratings')->insert(
            ['comment'=> $comment, 'rating'=>$rating, 'video_id'=>$id, 'user_id'=> \Auth::user()->id, 'created_at'=> Carbon::now()]
        );
       /* $rating = new Rating();
        $rating->video_id = $id;
        $rating->fill($data);

        $rating->video_id = $id;
        $rating->user_id = \Auth::user()->id;

        $rating->save();*/


        return redirect('videos/'.$id);
    }
}
