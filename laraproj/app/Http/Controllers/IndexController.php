<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{

    public function index()
    {
        //'login', 'full_name', 'registration_date', 'user_id', 'password'

        $users = DB::table('users')->get();


        //$users = DB::table('users')->first();


        return view('welcome')->with('users', $users);
    }

    public function show($id){
        $user = DB::table('users')->select('id', 'full_name', 'registration_date')->where('id', $id)->first();

        dump($user);

    }
}
