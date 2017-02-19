<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class IndexController extends Controller
{

    public function index(){

        $users = User::select(['login', 'full_name', 'registration_date', 'user_id', 'password'])->get();

        return view('welcome')->with('users_name', $users);
    }
}
