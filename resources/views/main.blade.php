<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title')</title>
</head>
<body>
    @include('header')

    <div style="height: 100vh; background: url(https://wallpapercave.com/wp/wp2076373.png); no-repeat right;
    background-size: cover;">
    <center>
    @yield('Loading')
    </center>
    </div>


</body>
</html>


