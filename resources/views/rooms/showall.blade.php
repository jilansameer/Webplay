@extends('layouts.app')
@section('navigation')
@include('layouts.dark-nav')
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <br/><br/>
                <h1 class="card-title text-center">All Room</h1>
                <div class="card-body">
                    <div class="card-body">
                        <ul>
                            @foreach($rooms as $room)
                            <li><h3><a href="/rooms/{{$room->id}}">{{$room->room_name}}</a></h3></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
