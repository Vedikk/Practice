@extends('layouts.app')

@section('content')


    <div class="wrapper">
        <h1 class="welcome_tittle"> Check out last updates!</h1>
        <div class="container">
            @foreach($videos as $video)

                <div class="col-md-3">
                    <a href="{{ route('videoPage', ['id'=>$video->id]) }}" class="video_link center-block">
                        {{ $video->video_name }}
                        <img src="{{ $video->screenshot_path }}" alt="last_update_video"
                             class="video_thumbnail img-thumbnail img-responsive">
                    </a>
                    <div class="video_descript_welcome">
                        <p>
                            Added by: {{ $video->name }}
                            {{ $video->created_at }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{--    {{ --}}
@endsection