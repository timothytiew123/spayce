<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'sPAYce') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @guest
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/partnerships">Partnerships</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/drivers">Drivers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact Us</a>
                </li>
            </ul>
            @endguest

            @auth
            <ul class="navbar-nav mr-auto">
            @if(Auth::user()->auth_level === 1)
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/openings">Search Openings</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/Earnings">Earnings</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/verification">Verification</a>
                </li>
            @endif
            @if(Auth::user()->auth_level === 2)

                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Partners Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/openings">View other Openings</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/openings/create">Create Opening</a>
                </li>

            @endif
            </ul>
            @endauth

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            @if(Auth::user()->auth_level === 1)
                                <a class="dropdown-item" href="{{ url('/dashboard') }}"><b>Driver</b></a>
                            @endif

                            @if(Auth::user()->auth_level === 2)
                                <a class="dropdown-item" href="{{ url('/dashboard') }}"><b>Partner</b></a>
                            @endif

                            <a class="dropdown-item" href="{{ url('/logout') }}"
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
        </div>
    </div>
</nav>

