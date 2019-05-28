@extends('layouts.app')
@section('navigation')
@include('layouts.dark-nav')
@endsection
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>WebMap</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- added scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
        <script src="http://d3js.org/d3.v3.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/edit.js') }}"></script>
        <!-- Fonts
            <link rel="dns-prefetch" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">-->
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- added stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    </head>
    <body>
        <div id="container">
          
            <!-- <main class="py-4">
                @yield('content')
            </main> -->
        </div>
        <script type="text/javascript">
            var childId = parseInt('{!! $child->id !!}');
            var br = {!! json_encode($br) !!};
			var counts = {!! json_encode($counts) !!};
        </script>
    </body>
</html>
