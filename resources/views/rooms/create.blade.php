@extends('layouts.app')
@section('navigation')
@include('layouts.dark-nav')
@endsection
@section('content')

<body class="index-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <br/><br/>
                    <h1 class="card-title text-center">Create Room</h1>

                    <div class="card-body">
                        <form method="POST" action="/rooms" aria-label="{{ __('Create Class') }}">
                            @csrf
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                            <i class="material-icons">group</i>
                                            </span>
                                        </div>
                                        <input id="room" name="room_name" type="text"  class="form-control" required autofocus placeholder="Room Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                            <i class="material-icons">info</i>
                                            </span>
                                        </div>
                                        <textarea name ="info" class="form-control" rows="4" id="info" required autofocus placeholder="Additional Information"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0 text-center">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-success btn-round">
                                    {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
