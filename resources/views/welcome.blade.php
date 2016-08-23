<!DOCTYPE html>
<html>
    <head>
        <title>It's cool</title>
        <link href="/css/index.css" rel="stylesheet" >
        {{--<script src="/js/jquery.min.js"></script>--}}
        {{--<script src="/js/bootstrap.min.js"></script>--}}
        <script src="/js/index.js"></script>
        {{--<script  src="{{\Illuminate\Support\Facades\URL::asset('js/index2.js')}} "></script>--}}
    </head>
    <body>
    {{--<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>--}}
    {{--<div class="loader">--}}
        {{--<canvas width="480px" height="480px" id="loader"></canvas>--}}
        {{--<h1>Loading</h1>--}}
    {{--</div>--}}
    <div id="particles-background" class="vertical-centered-box"></div>
    <div id="particles-foreground" class="vertical-centered-box"></div>

    <div class="vertical-centered-box">
        <div class="content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
            {!! $star !!}
        </div>
    </div>

    </body>
</html>



