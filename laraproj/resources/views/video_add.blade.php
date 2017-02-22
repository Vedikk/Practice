@extends('layouts.site')


@section('video_adding')

    <div class="container ">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 video_adding_cont">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload Your video!</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('videoStore') }}"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name of video</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           placeholder="Name of video" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="upload_video_path" class="col-md-4 control-label">Video</label>

                                <div class="col-md-6">
                                    <input id="upload_video_path" type="file"  name="path" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Upload
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--<div class="container"  >
        <form class="form-horizontal" action="{{ route('videoStore') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2" for="name">Name of video:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="upload_btn">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>--}}

@endsection
