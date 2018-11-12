<header>
        <div class="container">
            <div class="row">
            <div class="grid_12 rel">
                <h1>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/Sunhill-Logo-B.png') }}" alt="Logo alt" style="height: 80px; width: auto">
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
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/about-us') }}">About us</a></li>
                            <li><a href="{{ url('/admissions') }}">Admissions</a></li>
                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact us</a></li>
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
    </header>