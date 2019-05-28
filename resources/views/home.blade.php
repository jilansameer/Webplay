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
                  <br />
					<h1 class="card-title text-center">Dashboard</h1>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <b>You are now logged in!</b>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
