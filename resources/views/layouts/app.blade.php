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
</head>
<body>
    <div id="app"  class="{{ route_class() }}-page">
        <!-- header -->
        @include('layouts.header')
        <!-- content -->
        <div class="main-content">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                 @yield('content')
                </div>
            </div>
        </div>
        <!-- footer -->
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scriptsAfterJs')
</body>
</html>
