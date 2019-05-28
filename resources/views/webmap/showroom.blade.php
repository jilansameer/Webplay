@extends('layouts.app3')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                  <br/>
				     <h2 class="card-title text-center">Overlapped Web Map for {{$room->room_name}}</h2>
					 <center>
						<div id="chart"></div>
					</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
