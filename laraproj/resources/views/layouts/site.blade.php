<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
    <title>MinVid</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,500,600" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container-fluid header clearfix">
    <a href="#" class="logo">MinVid</a>
    <div class="auth-box pull-right col-sm-4">
        <a href="#">Sign in</a>
        <span>or</span>
        <a href="#">Register</a>
    </div>
</div>

@yield('content')
</body>
</html>