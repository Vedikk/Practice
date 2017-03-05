@extends('layouts.app')
<head>

    @section('content')
        <div class="wrapper">
            <div class="video_player_container container">

                <h3>
                    {{ $video -> video_name}}
                </h3>
                <div class="embed-responsive embed-responsive-16by9 ">
                    <video class="embed-responsive-item video_player afterglow " poster='/{{ $video->screenshot_path }}'
                           autoplay width="750" height="420">
                        <source src="{{ $video->path}}" type="video/mp4">
                    </video>
                </div>
                <div class=" video_author">
                    <p>
                        <img src=" /avatars/{{ $video->user()->avatar }}" alt="user_avatar" class="small_user_avatar">
                        <a href="{{ route('UserPage', ['id'=> $video->user_id]) }}">{{ $video->user()->name }}</a> <br>
                    </p>
                </div>
            </div>

            <div class="container comments">
                @foreach($rating as $r)

                    <div class="col-md-8 col-md-offset-2 comment_cont ">
                        <div class="panel-heading ">
                            <img src="/avatars/{{ $r->avatar }}" alt="user_avatar" class="small_user_avatar">
                            <span class="comment_author">{{ $r->name }}</span> <br>
                            <span class="comment_body">
                            {{ $r->comment }}
                        </span>
                        </div>

                    </div>

                @endforeach
            </div>

            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <form id="comment_form" name="comment_form" role="form" method="POST"
                          action="{{ route('storeComment', $video->id) }}">
                        {{ csrf_field() }}
                        <div id="jRate"></div>
                        <input type="text" name="rating" id="ratingInput" style="display: none">
                        <textarea name="comment" class="textarea_comment" form="comment_form" cols="30" rows="10"
                                  placeholder="Leave Your comment"></textarea>
                        <button type="submit" class="btn btn-primary">Leave comment</button>

                    </form>

                </div>
            </div>
        </div>


@endsection
