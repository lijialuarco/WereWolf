{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
    {{--<title>狼人杀</title>--}}

    {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}
    {{--<link rel="stylesheet" href="/css/app.css">--}}

    {{--<style>--}}
        {{--html, body {--}}
            {{--height: 100%;--}}
        {{--}--}}

        {{--body {--}}
            {{--margin: 0;--}}
            {{--padding: 0;--}}
            {{--width: 100%;--}}
            {{--display: table;--}}
            {{--font-weight: 100;--}}
            {{--font-family: 'Lato', sans-serif;--}}
        {{--}--}}

        {{--.container {--}}
            {{--text-align: center;--}}
            {{--display: table-cell;--}}
            {{--vertical-align: middle;--}}
        {{--}--}}

        {{--.content {--}}
            {{--text-align: center;--}}
            {{--display: inline-block;--}}
        {{--}--}}

        {{--.title {--}}
            {{--font-size: 96px;--}}
        {{--}--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body>--}}
@extends('layout.app')
@section('content')
<div class="container">
    <h2>You created a {{ $playerNu }} Players Room.</h2>
    <div id="player-site">
        {{--{{ csrf_field() }}--}}
   @for($i=0;$i<$playerNu;$i++)
       {{--{{ dd(Redis::exists($roomNu.'sat'.$i)) }}--}}
        @if(Redis::exists($roomNu.'sat'.$i))
                <button  class="btn btn-danger btn-sm "  data-id="{{ Redis::lindex($roomNu,$i) }}" data-roomnu=" {{ $roomNu }}" disabled>
                    已经有玩家就坐
                </button>
        @else
        <button  class="btn btn-danger btn-sm "  data-id="{{ Redis::lindex($roomNu,$i) }}" data-roomNu=" {{ $roomNu }}">
            Player{{ $i+1 }}
        </button>
        @endif
    @endfor
    </div>
        <br/>
        {{--<h2>And room number is {{ $roomNo }}</h2>--}}

    {{--<button  class="btn btn-danger btn-sm " id="btn-player-site"  >--}}
     {{--1--}}
    {{--</button>--}}
        <h5>Tips:</h5>



</div>
<script src="/js/jquery.min.js"></script>
<script>
    (function () {

        var playerBtn = $('button');

        playerBtn.on('click',function(){

            this.innerHTML  = '您已入坐';
            playerBtn.prop('disabled',true);
            var data = $(this).data('id');
            var roomNu = $(this).data('roomnu');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/step/start',
//                    async:true,
                    type: 'post',
                    data: {id:data,roomNu:roomNu}
                });
////                        .done(function (e) {
////                            console.log(e);
////
////                            //生成新项目
////                            var str = String() +
////                                    "<div class=\"item-box\">" +
////                                    "<div class=\"project-item bs clearfix\" data-id=\"" + e.project_id +
////                                    "\">" +
////                                    "<div class=\"project-msg\">" +
////                                    "<h3 class=\"project-name f9\" >" + e.project_name +
////                                    "</h3>" +
////                                    "<a href=\"#\" class=\"see-test f9\" data-id=\"" + e.paper_id +
////                                    "\">查看试题</a>" +
////                                    "</div>" +
////                                    "<div class=\"ctl-box pull-right f9\">" +
////                                    "<i class=\"btn-delete\" data-id=\"" + e.project_id +
////                                    "\">删除</i>" +
////                                    "</div>" +
////                                    "<div class=\"sign\"></div>" +
////                                    "</div>" +
////                                    "</div>";
////
////                            $appendAnchor.after(str);
////
////                            $closePanelBtn.trigger('click');
////
////                            $resetBtn.trigger('click');
////
////                        })
////                        .fail(function (e) {
////                            ajaxErrorMsg(e, $('.modal-header'));
////                        });

    })();


    })();
</script>
@endsection
