@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                  <br />
                    <h2 class="card-title text-center">Viewing Web Map for {{$child->first_name}}</h2>
                    <a href="/webmap/edit/{{$child->id}}" class="btn btn-success" role="button">Edit Webmap</a>
					<center>
						<div id="chart1"></div>
					</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
