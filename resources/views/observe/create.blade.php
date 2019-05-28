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
                    <h2 class="card-title text-center">Observation for {{$child->first_name}}</h2>
					 @include ('layouts.error')
                    <form enctype="multipart/form-data" method="POST" action="/observe/{{$child->id}}" aria-label="{{ __('Observation Input') }}">
                        @csrf

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group row">
                                <div class="input-group">
                                    <select class="form-control" name="typ" id="sel1">
                                        <option>Plan</option>
                                        <option>Act</option>
                                        <option>Question</option>
                                        <option>Reflect</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group row">
                                <div class="input-group">
                                    <label for="date" class="col-form-label text-md-right">{{ __('Observation Date') }}</label>
                                </div>
                                <input name="date" type="text" class="form-control" placeholder="year-month-date" required autofocus>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group row">
                                <div class="input-group">
                                    <label for="description" class="col-form-label text-md-right">{{ __('Description') }}</label>
                                </div>
                                <textarea class="form-control" rows="8" name="description" autofocus></textarea>
                            </div>
                        </div>


                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group row">
                                <div class="input-group">
                                    <label for="imageInput" class="col-form-label text-md-right">Picture input</label>
                                    <img class="mx-auto d-block" src="/images/u531.png" width="50" height="50" alt="picture">
                                </div>
                                <input data-preview="#preview" name="input_img" type="file" id="imageInput">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group row">
                                <div class="input-group">
                                    <label for="picdescription" class="col-form-label text-md-right">{{ __('Pic Description') }}</label>
                                </div>
                                <textarea class="form-control" rows="8" name="picdescription" autofocus></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                        <input type="hidden" value="{{$area}}" name="area" />
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
