@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Your profile</div>

                        <div class="panel-body">
                            <img src="/avatars/{{ $user->avatar }}" alt="user_avatar" class="user_avatar">
                            <h3> Hi, {{ Auth::user()->name }}</h3><br>
                            <form action="/home" enctype="multipart/form-data" method="post">
                                <label>Update Profile image:</label>
                                <label for="inputFile" class="btn btn-default btn-file" id="inputFileLabel">
                                    Browse
                                </label>
                                <input type="file" id="inputFile" name="avatar" style="display: none;"
                                       accept="image/jpeg">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-sm btn-primary" value="Upload!">
                            </form>
                            <a href="{{ route('addVideo') }}" class="add_video_home_link" role="button">Tap here to add
                                video!</a> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="last_updates_home_cont container ">
            <h2 class="updates_title_home">Your last updates!</h2>
            <div class="col-md-10 col-md-offset-1 owl-carousel home-carousel owl-theme  ">
                @foreach($videos as $video)
                    <div class="last_video_home owl-item">
                        <a href="{{ route('videoPage', ['id'=>$video->id]) }}" class="video_link center-block">
                            <img src="{{ $video->screenshot_path }}" alt="last_update_video"
                                 class="video_thumbnail img-thumbnail img-responsive"> <span class="video_name">{{ $video->video_name }}</span>
                        </a>
                    </div>

                @endforeach

            </div>
        </div>


    </div>
@endsection
