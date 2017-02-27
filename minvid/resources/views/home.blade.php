@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <img src="/avatars/{{ $user->avatar }}" alt="user_avatar" class="user_avatar">
                        <h3> Hi, {{ Auth::user()->name }}</h3><br>
                        <form action="/home" enctype="multipart/form-data" method="post">
                            <label>Update Profile image:</label>
                            <label class="btn btn-default btn-file">
                                Browse <input type="file" name="avatar" style="display: none;">
                            </label>
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-sm btn-primary" value="Upload!">
                        </form>

                    </div>

                    <ul class="last_updates_ul">
                        <a href="{{ route('addVideo') }}">Tap here to add video!</a> <br>
                        Last updates!
                        @foreach($videos as $video)
                            <li class="last_updates_li">
                                <a href="{{ route('videoPage', ['id'=>$video->id]) }}">{{ $video->video_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
