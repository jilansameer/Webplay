@extends('layouts.app')
@section('navigation')
@include('layouts.dark-nav')
@endsection
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                  <br />
                    <h1 class="card-title text-center">Room Name: {{$room->room_name}}</h1>
                    <h3 class="card-title text-left">Total Children: {{count($childs)}}</h3>
                    <a href="/child" class="btn btn-success" role="button">Add Child</a>
                    <a href="/webmap/rooms/{{$room->id}}" class="btn btn-success" role="button">Overlap WebMap</a>
                    <h3 class="card-title text-left">All Childs of This Room</h3>
                    <ul>
                        @foreach($childs as $child)

                       <li>
                        <div class="profile-photo-small">
                          <img src="/images/{{$child->id}}/pic" alt="Circle Image" class="img-raised rounded-circle img-fluid" width="50" height="50"/>
                            <a href="/child/{{$child->id}}">{{$child->first_name}} {{$child->last_name}}</a>
                            <br />
                            <br />
                        </div>


                    </li>
                       @endforeach
                    </ul>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
