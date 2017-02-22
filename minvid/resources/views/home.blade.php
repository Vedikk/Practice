@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        Hi, {{ Auth::user()->name }} <br>
                        <a href="{{ route('addVideo') }}">Tap here to add video!</a>
                    </div>
                    <ul class="last_updates_ul">
                        Last updates!
                        @foreach($videos as $video)
                            <li class="last_updates_li">
                                <a href="{{ $video->path }}">{{ $video->video_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
