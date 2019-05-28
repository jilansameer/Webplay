@extends('layouts.app')
@section('navigation')
@include('layouts.dark-nav')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Class Room</div>
                <div class="card-body">
                    <form method="POST" action="/rooms" aria-label="{{ __('Create Class') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="room_name" class="col-sm-4 col-form-label text-md-right">{{ __('Room Name') }}</label>
                            <div class="col-md-6">
                                <input id="room" name="room_name" type="text"  class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="info" class="col-sm-4 col-form-label text-md-right">{{ __('Aditional info') }}</label>
                            <div class="col-md-6">
                                <textarea name ="info" class="form-control" rows="4" id="info" required autofocus></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
@endsection
