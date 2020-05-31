<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'BangladeshTimes')}}</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap_v4.3.1/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>
        <script src="{{ asset('vendor/jquery_v3.3.1/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap_v4.3.1/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>