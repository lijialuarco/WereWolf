@extends('layout.app')
@section('content')
<div class="container">
    <form action="/room" method="post" class="createRoom-form"
          id="createRoom_form">
        {{ csrf_field() }}
        {{--<h2>Set Your Nickname:</h2> <input name="nickname" id="nickname" />--}}
        {{--<h2>Entry Your RoomNo:</h2> <input name="RoomNo" id="RoomNo" />--}}
        <br/>
        <h2>Choose Roles:</h2>
        <input name="wolfNumber" id="wolfNumber" size="5"/> &nbsp;&nbsp;&nbsp;<span>Wolves</span>
        <br/>
        <input name="villagerNumber" id="villagerNumber" size="5"/> &nbsp;<span>Villagers</span>
        <br/>
        <input type="checkbox" name="seer" value="seer" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Seer</span>
        <br/>
        <input type="checkbox" name="witch" value="withch" />&nbsp;&nbsp; <span>Witch</span>
        <br/>
        <input type="checkbox" name="hunter" value="hunter" /> <span>Hunter</span>

        <h5>Tips:</h5>



        <button type="submit" class="btn btn-primary btn-lg btn-submit">
            Create
        </button>
    </form>
    </div>
@endsection
