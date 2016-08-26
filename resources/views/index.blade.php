@extends('layout.app')
@section('content')
    <div class="container">

    <form action="#" method="post" class="feedback-form"
          id="feedback_form">
        {{ csrf_field() }}
        {{--<h2>Set Your Nickname:</h2> <input name="feedback" id="feedback" />--}}
        <h2>Entry Your RoomNo:</h2> <input name="RoomNo" id="RoomNo" />
        <h5>Tips:Good Luck </h5>



        <button  type="submit" class="btn btn-danger btn-sm btn-submit">
            Start
        </button>
        <br />
        <a  class="" href="{{ url('/room/create') }}">Or Create A Room</a>

    </form>
    </div>
@endsection
