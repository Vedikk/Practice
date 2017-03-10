<?php

namespace App\Http\Controllers;

use App\Rating;
use App\User;
use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoPageController extends Controller
{
    public function show($id)
    {


        $video = Video::where('id', $id)->first();

        $rating = \DB::table('ratings')
            ->leftJoin('users', 'ratings.user_id', '=', 'users.id')
            ->leftJoin('videos', 'ratings.video_id', '=', 'videos.id')
            ->select('ratings.*', 'users.name', 'users.avatar', 'videos.video_name')
            ->where('ratings.video_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        $videoRating = \DB::table('ratings')
            ->where('video_id', $id)
            ->avg('rating');


        return view('video', array(
            'video' => $video,
            'rating' => $rating,
            'videoRating'=>$videoRating,
            ));
    }

    public function storeComment(Request $request, $id){

        // in case of cooment/rating requiered

        /*$this->validate($request, [

            'comment' => 'required|max:255'
        ]);*/

        /*
       $data =$request->all();
       $rating = new Rating();
       $rating->video_id = $id;
       $rating->fill($data);

       $rating->video_id = $id;
       $rating->user_id = \Auth::user()->id;

       $rating->save();
        */

        $comment = $request->comment;
        $rating  = $request->rating;

       \DB::table('ratings')->insert(
            ['comment'=> $comment, 'rating'=>$rating, 'video_id'=>$id, 'user_id'=> \Auth::user()->id, 'created_at'=> Carbon::now()]
        );

        return redirect('videos/'.$id);
    }
}
