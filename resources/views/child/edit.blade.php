@extends('layouts.app')
@section('navigation')
@include('layouts.dark-nav')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Child Profile</div>
                <div class="card-body">
                    <form method="POST" action="/child/edit/{{$child->id}}" aria-label="{{ __('Edit Child Profile') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input name="first_name" type="text"  class="form-control" value="{{$child->first_name}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-sm-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input name="last_name" type="text"  class="form-control" value="{{$child->last_name}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="room_name" class="col-sm-4 col-form-label text-md-right">{{ __('Room Name') }}</label>
                            <div class="col-md-6">
                                <input name="room_name" type="text"  class="form-control" value="{{$child->room_name}}"
                                    required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-sm-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <input name="gender" type="text"  class="form-control" value="{{$child->gender}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_of_birth" class="col-sm-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                            <div class="col-md-6">
                                <input name="date_of_birth" type="text"  class="form-control" value="{{$child->date_of_birth}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="about" class="col-sm-4 col-form-label text-md-right">{{ __('About') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="about" value="{{$child->about}}"  autofocus></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                {{ __('Done') }}
                                </button>
                            </div>
                        </div>
                        <hr>
                        @include ('layouts.error')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
