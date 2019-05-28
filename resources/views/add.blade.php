@extends('layouts.app')
@section('navigation')
@include('layouts.dark-nav')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Child</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('saveChild') }}" aria-label="{{ __('Add Child') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input name="first_name" type="text"  class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-sm-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                            <div class="col-md-6">
                                <input name="last_name" type="text"  class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="room_name" class="col-sm-4 col-form-label text-md-right">{{ __('Room Name') }}</label>
                            <div class="col-md-6">
                                <input name="room_name" type="text"  class="form-control"
                                    required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-sm-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <input name="gender" type="text"  class="form-control" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_of_birth" class="col-sm-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                            <div class="col-md-6">
                                <input name="date_of_birth" type="text"  class="form-control" placeholder="year-month-date" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="about" class="col-sm-4 col-form-label text-md-right">{{ __('About') }}</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="about"  autofocus></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                {{ __('Add+') }}
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
