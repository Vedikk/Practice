<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){


        return view('welcome');
    }
}
