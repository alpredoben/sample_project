<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SAMPLE PROJECTS') }}</title>

    <link href="{{ asset('template/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('template/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <link href="{{ asset('template/css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('template/css/style.css')}}" rel="stylesheet" />
</head>
<body class="gray-bg">
    @yield('content')


    <script src="{{ asset('template/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.js') }}"></script>
</body>
</html>
