@extends('layouts.app')
<head>
    <style>
        h3, a{
            margin-left: 30px;
        }
    </style>
</head>
@section('content')

    <h3>Last updates</h3>
    @foreach($video as $v)

        <a href="{{ $v->path }}">{{ $v->video_name }}</a> <br>

        <video style="width: 200px; height: 150px" >
            <source src="{{ $v->path }}">

            {{ $v->video_name }}</video>

    @endforeach

@endsection

