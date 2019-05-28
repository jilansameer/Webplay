@extends('layouts.app')
@section('navigation')
@include('layouts.nav')
@endsection

@section('content')


<body class="signup-page ">
    <div class="page-header header-filter" filter-color="purple" style="background-image: url(&apos;../assets/img/bg7.jpg&apos;); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">Reset Password</h2>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-17 ml-auto">
                                    <!-- Centering for login -->
                                </div>

                                <!-- Social media login -->
                                <div class="col-md-8 mr-auto">
                                    <div class="social text-center">
                                      @if (session('status')) <!-- Success alert -->
                                          <div class="alert-box success">
                                              {{ session('status') }}
                                          </div>
                                      @endif

                                    </div>

                                    <!-- Login -->
                                    <form class="form" method="POST" action="{{ route('password.email') }}">
                                        @csrf
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                    <i class="material-icons">mail</i>
                                                    </span>
                                                </div>

                                                <input placeholder="Email..." id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                                  <span class="invalid-feedback" >
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                  </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="text-center" class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-2">
                                                <button type="submit" class="btn btn-primary btn-round">
                                                {{ __('Send Reset Password Link') }}
                                                </button>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
