<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}

    {{-- <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> --}}

    <!-- Styles -->
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{ asset('backend/css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('backend/css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @stack('css')
</head>
<body>
    <div id="app">
        <div class="wrapper">
            @if (Request::is('admin*'))
                {{-- Inicio sidebar --}}
                @include('layouts.partial.sidebar')
                {{-- Fin sidebar --}}
            @endif
            <div class="main-panel">
                @if (Request::is('admin*'))
                    {{-- Inicio topbar --}}
                    @include('layouts.partial.topbar')
                    {{-- Fin topbar --}}
                @endif
                    @yield('content')
                @if (Request::is('admin*'))
                    {{-- Inicio footer --}}
                    @include('layouts.partial.footer')
                    {{-- Fin footer --}}
                @endif
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/js/material.min.js') }}" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="{{ asset('backend/js/chartist.min.js') }}"></script>
    <!--  Dynamic Elements plugin -->
    <script src="{{ asset('backend/js/arrive.min.js') }}"></script>
    <!--  PerfectScrollbar Library -->
    <script src="{{ asset('backend/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('backend/js/bootstrap-notify.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('backend/js/material-dashboard.js?v=1.2.0') }}"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('backend/js/demo.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}', 'Error', {positionClass: "toast-bottom-right", closeButton: true, timeOut: 3000});
        </script>
        @endforeach
    @endif

    {{-- @if(session('successMsg'))
        <script>
            toastr.success('{{ session('successMsg') }}', 'Éxito', {positionClass: "toast-bottom-right", closeButton: true, timeOut: 3000})
        </script>
    @endif --}}
    @stack('scripts')
    {!! Toastr::message() !!}
</body>
</html>
