<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" href="{{ asset('images/Sunhill-Logo-B.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/Sunhill-Logo-B.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sunhill School | Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('assets/css/paper-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don&apos;t include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
        @include('admin.includes.menu')
        <div class="main-panel">
            @include('admin.includes.header')
            @yield('content')
            @include('admin.includes.footer')
        </div>
    </div>
</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ asset('assets/js/bootstrap-checkbox-radio.js') }}"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('assets/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="{{ asset('assets/js/paper-dashboard.js') }}"></script>

	<!-- Paper Dashboard DEMO methods, don&apos;t include it in your project! -->
	<script src="{{ asset('assets/js/demo.js') }}"></script>

	{{-- <script type="text/javascript">
    	$(document).ready(function(){
        	demo.initChartist();

            $.notify({
                    icon: 'ti-gift',
                    message: "Welcome to <b>Sunhill School Dashboard</b>"

                },{
                    type: 'success',
                    timer: 4000
            });

    	});
	</script> --}}

    @if($errors->has('email') || $errors->has('password'))
        <script type="text/javascript">
            $.notify({icon:'ti-warning',message:"{{ $errors->first('email') }} {{ $errors->first('password') }}"},{ type: 'error',timer:4000});
        </script>
    @endif
    @if(\Session::has('error'))
        <script type="text/javascript">
            var ErrorMsg = function(msg) {
                $.each(msg, function(key, value) {
                    console.log(value);
                });
            }
            ErrorMsg("{!! \Session::get('error') !!}");
            //console.log("{!! \Session::get('error') !!}");
           // $.notify({icon:'ti-gift', message:"{!! \Session::get('error') !!}"},{ type: 'error', timer:4000});
        </script>
    @endif
    @if(\Session::has('success'))
        <script type="text/javascript">
            $.notify({icon:'ti-check', message:"{!! \Session::get('success') !!}"},{ type: 'success', timer:4000});
        </script>
    @endif
    @if(\Session::has('info'))
        <script type="text/javascript">
            $.notify({icon:'ti-bell', message:"{!! \Session::get('info') !!}"},{ type: 'info', timer:4000});
        </script>
    @endif
    @if(\Session::has('warning'))
        <script type="text/javascript">
            $.notify({icon:'ti-warning', message:"{!! \Session::get('warning') !!}"},{ type: 'warning', timer:4000});
        </script>
    @endif

</html>