<?php

namespace App\Http\Controllers;

use App\Rating;
use App\User;
use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

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

        if ($request->ajax()) {
            return view('videoPage.videoComments',
                array(
                    'rating' => $rating,
                    'video'=>$video,
                ))->render();
        }


        return view('videoPage.video', array(
            'rating'=> $rating,
            'video'=>$video,
        ));
    }


/*TODO make page of unknown video*/


    public function storeComment(Request $request, $id)
    {

        $comment = $request->comment;
        $rating = $request->rating;

        /*$rate = new Rating;
        $rate->user_id = \Auth::user();
        $rate->video_id = $id;
        $rate->comment = $comment;
        $rate->rating = $rating;
        $rate->save();
*/


        if(\Auth::guest() ){
            return redirect('login');
        }

        else{
            \DB::table('ratings')->insert(
                ['comment' => $comment, 'rating' => $rating, 'video_id' => $id, 'user_id' => \Auth::user()->id, 'created_at' => Carbon::now()]
            );

            return redirect()->back();
        }

    }

}
