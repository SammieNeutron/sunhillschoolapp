<header style="background: url(images/classroom_session4.jpg) center bottom 0 no-repeat ;">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 rel">
                <h1>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('images/Sunhill-Logo-B.png') }}" alt="Logo alt" style="height: 90px; width: auto">
                    </a>
                </h1>
            </div>
        </div>
    </div>
    <section id="stuck_container">
        <!--==============================
                    Stuck menu
        =================================-->
        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a style="color: orange;" href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about-us') }}">About us</a></li>
                                <li><a href="{{ url('/admissions') }}">Admissions</a></li>
                                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('/about-us') }}">Contact us</a></li>
                                 @guest
                                    <li class="">
                                        <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="page1_header">
        <div class="container">
            <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 col-lg-offset-1">
                <div class="row" style="">
                    <div class="col-xs-4 tile" style="background: rgba(253, 138, 46, 0.80)">
                        <a href="admissions.html" class="text-center">
                            <div style="color: white; font-family: inherit; padding-top: 0.6em;">
                                <span><i class="fa fa-sign-in fa-1x"></i></span>
                            </div>
                            <p style="margin: 0 0 10px; font-size: small">
                                Admissions
                            </p>
                        </a>
                    </div>
                    <div class="col-xs-4 tile" style="background-color: gray">
                        <a class="" href="gallery.html">
                            <img src="images/background_image.jpg" alt="" height="100px" width="100%">
                            <div class="carousel-caption" style="top: 32%;">
                                <p style="font-size: 12pt">Gallery</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <script>
                        <!--
                        setInterval(flash, 500);
                        function flash() {
                            element = 'latestEvents';
                            var initialColor = document.getElementById(element).style.backgroundColor;
                            var newColor = document.getElementById(element).style.color;
                            document.getElementById(element).style.backgroundColor = newColor;
                            document.getElementById(element).style.color = initialColor;
                        }
                        //-->
                    </script>

                    <div class="col-xs-4 tile" style="background: rgba(138, 43, 226, 0.8)">
                        <a href="admissions.html#school_calendar" class="btn btn-xs" id="latestEvents"
                           style="background-color: orangered; color: white;border-radius: 0px;position: absolute;">
                            <b>Latest Events</b>
                        </a>
                        <a href="admissions.html#school_calendar" class="text-center">
                            <div style="color: white; font-family: inherit; padding-top: 1em;">
                                <span><i class="fa fa-calendar fa-1x"></i></span>
                            </div>
                            <p style="margin: 0 0 10px; font-size: small">
                                Calendar
                            </p>
                        </a>
                    </div>
                    <div class="col-xs-4 tile" style="background: rgba(255, 0, 0, 0.80)">
                        <a href="classes.html" class="text-center">
                            <div style="color: white; font-family: inherit; padding-top: 1em;">
                                <span><i class="fa fa-group fa-1x"></i></span>
                            </div>
                            <p style="margin: 0 0 10px; font-size: small">
                                Classes
                            </p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-offset-1 col-sm-6 col-md-offset-1 col-md-7 col-lg-6 col-lg-offset-1">
                <div class="carousel" data-ride="carousel" data-interval="3000">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active vertical_slide">
                            <h3 style="color: whitesmoke; font-family: Kids; font-size: 18pt; line-height: 27px; text-shadow: 2px 3px black">A School with difference ...<br></h3>
                        </div>
                        <div class="item horizontal_slide" role="listbox">
                            <h3 style="color: whitesmoke; font-family: Kids; font-size: 18pt; line-height: 27px; text-shadow: 2px 3px black">...where learning is fun...<br></h3>
                        </div>
                        <div class="item slide_3" role="listbox">
                            <h3 style="color: whitesmoke; font-family: Kids; font-size: 18pt; line-height: 27px; text-shadow: 2px 3px black">...preparing the future leaders for the future.<br></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>