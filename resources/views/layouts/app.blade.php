<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="Sunhill School, Mushin, Lagos, Website, Admissions, Classes, Contact. Where learning is fun,
        A school with a difference, Preparing the future leaders for the future. Lagos, Nigeria.">
    <meta name="author" content="08175619608, 08172784571">

    <title>Sunhill School</title>

    <link rel="icon" href="{{ asset('images/Sunhill-Logo-B.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/Sunhill-Logo-B.png') }}"/>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sunhill_school.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('bootstrap/jquery/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.1.1.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/superfish.js') }}"></script>
    <script src="{{ asset('js/jquery.equalheights.js') }}"></script>
    <script src="{{ asset('js/jquery.mobilemenu.js') }}"></script>
    <script src="{{ asset('js/tmStickUp.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.totop.js') }}"></script>
    <script>
        $(window).load(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
            $('#stuck_container').tmStickUp({});
        });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    @yield('extra_style')
</head>
<body class="page1" id="top" style="background: url('{{ asset('images/Background.jpg') }}')">
    
    @yield('content')

    @yield('extra_script')
</body>
</html>
