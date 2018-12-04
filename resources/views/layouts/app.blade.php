<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/waves.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fa/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">  
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="logo d-flex justify-content-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }} 
                </a>
            </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse  d-flex justify-content-center" id="navbarSupportedContent " style="padding: 10px;">
                    <!-- Left Side Of Navbar -->
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Authentication Links -->
                        
                    </ul>
                </div>
        </nav>

        <main class="py-4">
            <div class="admin">
                @yield('content')
            </div>
        </main>
    </div>
    <script type="text/javascript" src="{{  asset('js/jquery.min.js') }}"></script>
     <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{  asset('js/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('js/raphael.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/datatables.min.js') }}" defer></script>
    <script type="text/javascript" src="{{  asset('js/custom.js') }}"></script>
    
    <script type="text/javascript">
        
    </script>
</body>
</html>
        