@extends('layouts.app')
<head>
    <style>
        h3, a {
            margin-left: 30px;
        }
    </style>
</head>
@section('content')

    <div class="video_player_container">
        <h3>
            {{ $video -> video_name}}
        </h3>
        <div class="embed-responsive embed-responsive-16by9 " >
            <video class="embed-responsive-item video_player afterglow "  id="myvideo"  poster='/{{ $video->screenshot_path }}'  name="media" data-autoresize="fit" width="750" height="420">
                <source src="{{ $video->path}}" type="video/mp4">
            </video>
        </div>
    </div>



@endsection
