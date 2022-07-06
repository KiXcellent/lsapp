<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        {{-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a> --}}
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'LSAPP') }}
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ url('/home') }}" class="nav-link px-2 text-secondary">{{ __('Home') }}</a></li>
          <li><a href="{{ url('/about') }}" class="nav-link px-2 text-white">{{ __('About') }}</a></li>
          <li><a href="{{ url('/services') }}" class="nav-link px-2 text-white">{{ __('Services') }}</a></li>
          <li><a href="{{ url('/posts') }}" class="nav-link px-2 text-white">{{ __('Blog') }}</a></li>
        </ul>

        {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Search..." aria-label="Search">
        </form> --}}

         <!-- Right Side Of Navbar -->
        <div class="navbar-nav text-end col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <ul class="nav col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                <li class="nav-link"><a class="btn btn-outline-light me-2" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @endif

                @if (Route::has('register'))
                <li class="nav-link"><a class="btn btn-outline-warning me-2" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
            @else
                <li class="nav-link"><a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-2">{{ __('Dashboard') }}</a></li>
                <li class="nav-link dropdown">
                    <a id="navbarDropdown" class="btn btn-outline-success me-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="btn btn-outline-warning dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            @endguest
        </div>
      </div>
    </div>
</header>
