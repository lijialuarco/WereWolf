<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <!-- Styles -->
    <style>

        @font-face {
            font-family: 'hycx';
            src: url('/font/hycx.eot');
            src:
                    url('/font/hycx.eot?#font-spider') format('embedded-opentype'),
                    url('/font/hycx.woff2') format('woff2'),
                    url('/font/hycx.woff') format('woff'),
                    url('/font/hycx.ttf') format('truetype'),
                    url('/font/hycx.svg') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        span {
            background-color: #fff;
            color: #636b6f;
            font-family: 'hycx', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        /*.full-height {*/
            /*height: 100vh;*/
        /*}*/

        /*.flex-center {*/
            /*align-items: center;*/
            /*display: flex;*/
            /*justify-content: center;*/
        /*}*/

        /*.position-ref {*/
            /*position: relative;*/
        /*}*/

        /*.top-right {*/
            /*position: absolute;*/
            /*right: 10px;*/
            /*top: 18px;*/
        /*}*/

        /*.content {*/
            /*text-align: center;*/
        /*}*/

        /*.title {*/
            /*font-size: 84px;*/
        /*}*/

        /*.links > a {*/
            /*color: #636b6f;*/
            /*padding: 0 25px;*/
            /*font-size: 12px;*/
            /*font-weight: 600;*/
            /*letter-spacing: .1rem;*/
            /*text-decoration: none;*/
            /*text-transform: uppercase;*/
        /*}*/

        /*.m-b-md {*/
            /*margin-bottom: 30px;*/
            /*color: #636b6f;*/
            /*font-family: 'hycx', sans-serif;*/
            /*font-weight: 100;*/
        /*}*/
    </style>
</head>
<body>
@yield('content')
</body>
</html>