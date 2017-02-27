<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{

    public function index()
    {

        $users = \DB::table('users')->get();

        return view('welcome')->with('users', $users);
    }

    public function show($id){
        $user =\DB::table('users')->select('id', 'name', 'created_at')->where('id', $id)->first();

        return view('user')->with('user', $user);

    }
}
