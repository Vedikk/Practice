@extends('layouts.app')

@section('content')

    @foreach($users as $user)
        <div class="col-md-3 col-sm-4 user_block_all_users ">
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{ route('UserPage', ['id'=>$user->id]) }}" class="user_link_all_users">
                        <img src="/avatars/{{ $user->avatar }}" alt="user_avatar" class=" all_users_img">
                        <br>
                        <h3>  {{ $user->name }}</h3>
                    </a>
                </div>
            </div>
        </div>
        </div>

    @endforeach

@endsection