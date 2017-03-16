<?php

namespace App\Http\Controllers;

use App\Rating;
use App\User;
use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoPageController extends Controller
{
    protected $rating;

    public function __construct(Rating $rating)
    {
        $this->rating = $rating;
    }

    public function index(Request $request, $id)
    {
        $rating = $this->rating->where('video_id', $id)->latest('created_at')->paginate(5);
        $video = Video::where('id', $id)->first();
        $videoRating = Rating::where('video_id', $id)
            ->avg('rating');


        if ($request->ajax()) {
            return view('videoPage.videoComments',
                array(
                    'rating' => $rating,
                    'video'=>$video,
                    'videoRating'=>$videoRating
                ))->render();
        }


        return view('videoPage.video', array(
            'rating'=> $rating,
            'video'=>$video,
            'videoRating'=>$videoRating
        ));
    }



    public function storeComment(Request $request, $id)
    {

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
        $rating = $request->rating;


        \DB::table('ratings')->insert(
            ['comment' => $comment, 'rating' => $rating, 'video_id' => $id, 'user_id' => \Auth::user()->id, 'created_at' => Carbon::now()]
        );

        return redirect()->back();
    }
}
