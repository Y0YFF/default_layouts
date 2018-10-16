<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container d-flex">
        <div>
            <span>
              <img src="{{ asset('image/logo.png') }}" alt="logo"
                  height="48px" wight="48px">
            </span>
            <span>
                <a class="navbar-brand" href="{{ url('/') }}">
                    Quen
                </a>
            </span>
        </div>
        <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item">
                  <a class="nav-link "href="{{ route('questions.index') }}">
                    <i class="fab fa-quora"></i>
                    <span class="ml-3">{{ __('Question') }}</span>
                  </a>
                </li>
                @guest
                    @if(Request::is(route('top')))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i>
                            <span class="ml-3">{{ __('Login') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fas fa-user"></i>
                            <span class="pl-3">{{ Auth::user()->name }}</span>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="ml-3">{{ __('Logout') }}</span>

                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
