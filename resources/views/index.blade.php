@extends('layout.app')
@section('content')
    <div class="container">

    <form action="#" method="post" class="index-form"
          id="index_form">
        {{--{{ csrf_field() }}--}}
        {{--<h2>Set Your Nickname:</h2> <input name="feedback" id="feedback" />--}}
        {{--<h2>Entry Your RoomNo:</h2> <input name="RoomNo" id="RoomNo" />--}}
        {{--<h5>Tips: </h5>--}}



        {{--<button  type="submit" class="btn btn-danger btn-sm btn-submit">--}}
            {{--Start--}}
        {{--</button>--}}
        {{--<br />--}}
        {{--<a  class="" href="{{ url('/room/create') }}">Or Create A Room</a>--}}
        {{--<div class="flex-center position-ref full-height">--}}
        <span> 这是好看的字体</span>

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                   {{--输入你的房间号：--}}
                {{--</div>--}}
                {{--<input name="RoomNo" id="RoomNo" />--}}
                {{--<button  type="submit" class="btn btn-danger btn-sm btn-submit">--}}
                   {{--开始--}}
                {{--</button>--}}
                {{--<div class="links">--}}
                    {{--<a  class="" href="{{ url('/rooms/create') }}">创建房间</a>--}}
                {{--</div>--}}
            {{--</div>--}}
    </form>
    </div>
@endsection
