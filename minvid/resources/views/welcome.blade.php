@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <h1 class="welcome_tittle infinite-scroll"> Check out last updates!</h1>
        <div class="container ">
            @foreach($videos as $video)

                <div class="col-md-3 col-sm-6 ">
                    <a href="{{ route('videoPage', ['id'=>$video->id]) }}" class="video_link center-block"
                       title="{{ $video->video_name }}">
                        <span class="video_name">{{ $video->video_name }}</span>
                        <img src="{{ $video->screenshot_path }}" alt="last_update_video"
                             class="video_thumbnail img-thumbnail img-responsive">
                    </a>
                    <div class="video_descript_welcome">
                        <p>
                            <input class="kv-ltr-theme-fa-alt rating-loading welcome_video_rating"
                                   value="{{ $video->rating() }}">
                            <span class="desc_span_welcome"> Added by: <a href="{{ route('UserPage', ['id'=> $video->user_id]) }}">{{ $video->name }}</a> {{ $video->created_at}}</span>
                            <br>

                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination_welcome">
            {{ $videos->links() }}
        </div>
    </div>
    @endsection

