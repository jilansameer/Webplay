@extends('layouts.app4')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                  <br />
                    <h2 class="card-title text-center">Add More Portion in Web Map for {{$child->first_name}}</h2>
					<center>
						<div id="chart2"></div>
					</center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
