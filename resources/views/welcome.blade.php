<!DOCTYPE html>
<html>
    <head>
        <title>It's cool</title>
        <link href="/css/index.css" rel="stylesheet" >
    </head>
    <body>
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
            {!! $logo !!}
        </div>
    </div>
    <script src="/js/index.js"></script>
    </body>
</html>



