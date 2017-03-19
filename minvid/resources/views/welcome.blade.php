@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="sortBy_welcome " >
            <span>Sort by:</span>
            <a href="{{route('index')}}">Date</a> | <a href="{{route('sortByRating')}}">Rating</a>
        </div>
        <h1 class="welcome_tittle"> Check out last updates!</h1>
        <div class=" infinite-scroll ">
            @foreach($videos as $video)
                <div class="col-lg-3 col-md-4 col-sm-6 ">
                    <a href="{{ route('videoPage', ['id'=>$video->id]) }}" class="video_link center-block"
                       title="{{ $video->video_name }}">
                        <span class="video_name">{{ $video->short_name }}</span>
                        <img src="{{ $video->screenshot_path }}" alt="last_update_video"
                             class="video_thumbnail img-thumbnail img-responsive">
                    </a>
                    <div class="video_descript_welcome">
                        <p>
                            <input class="kv-ltr-theme-fa-alt rating-loading welcome_video_rating"
                                   value="{{ $video->ratingAvg() }}">
                            <span class="desc_span_welcome"> Added by: <a
                                        href="{{ route('UserPage', ['id'=> $video->user_id]) }}">{{ $video->user()->name }}</a> {{ $video->created_at}}</span>
                            <br>

                        </p>
                    </div>
                </div>
            @endforeach
                {{ $videos->links() }}
        </div>
    </div>
@endsection

