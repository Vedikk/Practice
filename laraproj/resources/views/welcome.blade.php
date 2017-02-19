@extends('layouts.site')

@section('content')

        @foreach($users_name as $user)

            <h2>
                id: {{ $user->user_id }} <br>
                login: {{ $user->login }} <br>
                Full Name: {{ $user->full_name }} <br>
                Password: {{ $user->password }} <br>
                Reg date: {{ $user->registration_date }} <br>
                /*********************************************/
            </h2>

        @endforeach

@endsection