@extends('layouts.app')

@section('content')

    @foreach($users as $user)
        <div class="col-md-4 col-sm-6 user_block_all_users ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('UserPage', ['id'=>$user->id]) }}">
                        <img src="/avatars/{{ $user->avatar }}" alt="user_avatar" class="user_avatar all_users_img"><br>
                        <h3>  {{ $user->name }}</h3>
                    </a>
                </div>
            </div>
        </div>
        </div>

    @endforeach

@endsection