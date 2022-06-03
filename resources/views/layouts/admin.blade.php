<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('./css/material-dashboard.css?v=3.0.2') }}" rel="stylesheet" />

</head>
<body>
    <div id="app">
        {{-- Side nav --}}
        @include('layouts.include.sidebar')

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
            {{-- navbar --}}
            @include('layouts.include.adminNavbar')

            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </main>
    </div>

    <!--   Core JS Files   -->
    <script src={{ asset("./js/popper.min.js") }}></script>
    <script src={{ asset("./js/bootstrap.min.js") }}></script>
    <script src={{ asset("./js/perfect-scrollbar.min.js") }}></script>
    <script src={{ asset("./js/smooth-scrollbar.min.js") }}></script>
    <script src={{ asset("./js/chartjs.min.js") }}></script>
</body>

</html>
