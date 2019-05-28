@extends('layouts.app')
@section('navigation')
@include('layouts.dark-nav')
@endsection
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <br/><br/>
                <h1 class="card-title text-center">Create Room</h1>
                <div class="card-body">
                  <!-- <hr> -->
                  @include ('layouts.error')
                    <form enctype="multipart/form-data" method="POST" action="{{ route('saveChild') }}" aria-label="{{ __('Add Child') }}">
                    @csrf

                    <div class="col-md-9">
                        <img class="mx-auto d-block" src="/images/u334.png"  width="50" height="50" alt="picture">
                    </div>

                    <div class="form-group row">
                        <label for="imageInput" class="col-sm-4 col-form-label text-md-right">Picture input</label>
                        <input data-preview="#preview" name="input_img" type="file" id="imageInput">
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                    </span>
                                </div>
                                <input name="first_name" type="text" class="form-control" placeholder="First Name" required autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="material-icons">face</i>
                                    </span>
                                </div>
                                <input name="last_name" type="text" class="form-control" placeholder="Last Name" required autofocus>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group row">
                        <label for="first_name" class="col-sm-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                        <div class="col-md-6">
                            <input name="first_name" type="text"  class="form-control" required autofocus>
                        </div>
                    </div> -->

                    <!-- <div class="form-group row">
                        <label for="last_name" class="col-sm-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                        <div class="col-md-6">
                            <input name="last_name" type="text"  class="form-control" required autofocus>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-10 col-sm-5">
                      <div class="form-group row">
                          <label for="room_name" class="col-sm-4 col-form-label text-md-right">{{ __('Room Name') }}</label>
                          <div class="col-md-7">
                              <select class="form-control" name="room_name" id="sel1">
                                  @foreach($rooms as $room)
                                  <option>{{$room->room_name}}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                  </div> -->

                  <!-- Test -->
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group row">
                      <label for="room_name" class="col-sm-4 col-form-label text-md-right">{{ __('Room Name') }}</label>
                  <select class="form-control" name="room_name" id="sel1">
                      @foreach($rooms as $room)
                      <option>{{$room->room_name}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div>


                  <!-- <div class="col-lg-10 col-sm-5">
                    <div class="form-group row">
                        <label for="gender" class="col-sm-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                        <div class="col-md-7">
                            <select class="form-control" name="gender" id="sel1">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                  </div> -->

                  <!-- Test -->
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group row">
                      <label for="room_name" class="col-sm-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                    <select class="form-control" name="gender" id="sel1">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                    </select>
                  </div>
                  </div>

                  <div class="form-group row">
                      <label for="date_of_birth" class="col-sm-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                      <div class="col-md-6">
                          <input name="date_of_birth" type="text"  class="form-control" placeholder="year-month-date" required autofocus>
                      </div>
                  </div>

                  <div class="col-lg-6 col-sm-6">
                    <div class="form-group row">
                        <label for="about" class="col-sm-4 col-form-label text-md-right">{{ __('About') }}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" name="about"  autofocus></textarea>
                        </div>
                    </div>
                  </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-5">
                            <button type="submit" class="btn btn-success btn-round">
                            {{ __('Add+') }}
                            </button>
                        </div>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add One Child</div>
                    <div class="card-body">


                        <form enctype="multipart/form-data" method="POST" action="{{ route('saveChild') }}" aria-label="{{ __('Add Child') }}">
                            @csrf
                            <div class="col-9">
                                <img class="mx-auto d-block" src="/images/u334.png"  width="50" height="50" alt="picture">
                            </div>
                            <div class="form-group row">
                                <label for="imageInput" class="col-sm-4 col-form-label text-md-right">Picture input</label>
                                <input data-preview="#preview" name="input_img" type="file" id="imageInput">
                            </div>
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
                                    <select class="form-control" name="room_name" id="sel1">
                                        @foreach($rooms as $room)
                                        <option>{{$room->room_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-sm-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="gender" id="sel1">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
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
    </div>  -->
@endsection
