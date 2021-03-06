<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', '')
        {{ config('app.name', 'Laravel') }}
    </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @stack('styles')
    </style>
</head>
<body>
    <div id="app">
        <!-- header -->
        @include('layouts.header')
        <!-- content -->
        <div class="main-content {{ route_class() }}-page">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                 @yield('content')
                </div>
            </div>
        </div>
        <!-- footer -->
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('js')
</body>
</html>
