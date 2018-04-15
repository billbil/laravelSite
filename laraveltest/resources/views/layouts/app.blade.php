<?php
/**
 * Created by PhpStorm.
 * User: bilbil
 * Date: 15/04/2018
 * Time: 19:36
 */
?>
<html>
<head>
    <title>laravem title</title>

    <link rel="stylesheet" href="/css/app.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">  </meta>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="laravel meta"/>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> </link>
</head>

<body>
    @include('inc.navbar')

    <div class="container-fluid">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-8">
                @include('inc.messages')
                @yield('content')
            </div>
            <div class="col-md-6 col-lg-6 col-sm-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="text-center" style="color: #9fcdff"> Copyright 2018 &copy; elbilbil</p>
        </div>
    </footer>

</body>

</html>