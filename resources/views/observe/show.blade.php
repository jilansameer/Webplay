@extends('layouts.app')
@section('navigation')
@include('layouts.dark-nav')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
				    <h2 class="card-title text-center">Viewing Observation for {{$child->first_name}}</h2>
                    <img src="/images/{{$child->id}}/{{$obser->area}}/Observation/pic" width="550" height="550" alt="picture"/>
                    <hr>
                    <h2>Description:</h2>
                    {{$obser->description}}
                    <hr>
                    <?php
                        if($obser->act)
                        {
                            echo "<h2>Act</h2>";
                             echo $obser->description;
                        }
                        else if($obser->question)
                        {
                            echo "<h2>Question</h2>";
                            echo $obser->description;
                        }
                        else if($obser->plan)
                        {
                           echo "<h2>Plan</h2>";
                            echo $obser->description;
                        }
                        else if($obser->reflect)
                        {
                            echo "<h2>Reflect</h2>";
                            echo $obser->description;
                        }

                        ?>
                    <hr>
                    <a href="/child/edit/{{$child->id}}" class="btn btn-success" role="button">Edit Profile</a>
                    <a href="/webmap/edit/{{$child->id}}" class="btn btn-success" role="button">Edit Webmap</a>
                    <a href="/webmap/{{$child->id}}" class="btn btn-success" role="button">View Webmap</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
