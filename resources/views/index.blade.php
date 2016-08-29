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


            <div class="content">
                <div class="title m-b-md">
                    Entry Your RoomNo:
                </div>
                <input name="RoomNo" id="RoomNo" />
                <button  type="submit" class="btn btn-danger btn-sm btn-submit">
                    Start
                </button>
                <div class="links">
                    <a  class="" href="{{ url('/room/create') }}">Or Create A Room</a>
                </div>
            </div>
    </form>
    </div>
@endsection
