<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato', sans-serif;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">

    @foreach($players as $player)
        <h5>{{ $player }}</h5>
    @endforeach
        <h2>You created a {{ count($players) }} Players Room.</h2>
        <br/>
        <h2></h2>

        <h5>Tips:</h5>



        <button type="submit" class="btn btn-primary btn-lg btn-submit">
            Create
        </button>



</body>
</html>
