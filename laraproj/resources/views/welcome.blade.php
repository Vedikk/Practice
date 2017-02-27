@extends('layouts.site')

@section('content')

        @foreach($users as $user)

            <h2>
                Full Name: {{ $user->name }} <a href="{{ route('userShow',['user_id'=>$user->id]) }}">Details</a> <br>
                /*********************************************/
            </h2>


        @endforeach



@endsection
