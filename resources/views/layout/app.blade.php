<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') Are U Wolf?</title>
    {{--<link rel="stylesheet" href="/css/app.css">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
    <style>

        @font-face {
            font-family: 'hyqt';
            src: url('../../../public/font/hyqt.eot');
            src:
                    url('../../../public/font/hyqt.eot?#font-spider') format('embedded-opentype'),
                    url('../../../public/font/hyqt.woff2') format('woff2'),
                    url('../../../public/font/hyqt.woff') format('woff'),
                    url('../../../public/font/hyqt.ttf') format('truetype'),
                    url('../../../public/font/hyqt.svg') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'hyqt', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        span {
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        /*.Raleway {*/
            /*font-family: 'Raleway', sans-serif;*/
            /*font-weight: 100;*/
            /*height: 100vh;*/
            /*margin: 0;*/
        /*}*/
        </style>
    @yield('css')

</head>
<body>
@yield('content')
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
</body>
</html>
