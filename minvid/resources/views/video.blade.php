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
        <div class="embed-responsive embed-responsive-16by9 ">
            <video class="embed-responsive-item video_player " autoplay  controls name="media">
                <source src="{{ $video->path}}" type="video/mp4"> {{ $video->video_name }}
            </video>
        </div>
    </div>



@endsection
