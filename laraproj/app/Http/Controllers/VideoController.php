<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class VideoController extends Controller
{
    public function add(){
        return view('video_add');
    }
    public function store(Request $request){
        dump($request->all());
        $this->validate($request, [

            'name'=> 'required|max:255',


        ]);
    }

}
