@extends('layouts.app')

@section('content')


    <div class="wrapper">
        <h1 class="welcome_tittle"> Check out last updates!</h1>
        <div class="container">
            @foreach($videos as $video)

                <div class="col-md-3 col-sm-6 ">
                    <a href="{{ route('videoPage', ['id'=>$video->id]) }}" class="video_link center-block" title="{{ $video->video_name }}">
                        <span class="video_name">{{ $video->video_name }}</span>
                        <img src="{{ $video->screenshot_path }}" alt="last_update_video"
                             class="video_thumbnail img-thumbnail img-responsive">
                    </a>
                    <div class="video_descript_welcome" >
                        <p>
                            Added by: <a href="{{ route('UserPage', ['id'=> $video->user_id]) }}">{{ $video->name }}</a>
                            <br>
                            <input  class="kv-ltr-theme-fa-alt rating-loading welcome_video_rating" value="{{ $video->rating() }}">
                            {{--<span>{{ $video->created_at}}</span>--}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn-warning btn-block" id="moreBtn">More</button>
    </div>

@endsection

