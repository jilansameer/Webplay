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
                  <br  />
					<h2 class="card-title text-center">Child Profile</h2>
                    <div class="col-sm-2 ml-left">
                        <img src="/images/{{$child->id}}/pic" alt="Circle Image" class="img-raised rounded-circle img-fluid" width="250" height="150">
                    </div>
                    <hr />
                    <div class="tim-typo">
                        <h4 class="title">
                            <span class="tim-note">First Name:</span>{{$child->first_name}}
                        </h4>
                    </div>
                    <hr />
                    <div class="tim-typo">
                        <h4 class="title">
                            <span class="tim-note">Last Name:</span>{{$child->last_name}}
                        </h4>
                    </div>
                    <hr />
                    <div class="tim-typo">
                        <h4 class="title">
                            <span class="tim-note">Room: </span>{{$child->room_name}}
                        </h4>
                    </div>
                    <hr />
                    <div class="tim-typo">
                        <h4 class="title">
                            <span class="tim-note">Gender:</span>{{$child->gender}}
                        </h4>
                    </div>
                    <a href="/child/edit/{{$child->id}}" class="btn btn-success" role="button">Edit Profile</a>
                    <a href="/webmap/edit/{{$child->id}}" class="btn btn-success" role="button">Edit Webmap</a>
                    <a href="/webmap/{{$child->id}}" class="btn btn-success" role="button">View Webmap</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
