<nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" href="/"><img class="logo my-3" src="/storage/images/logo1.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
        <ul class="navbar-nav">

            @guest
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/shop">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @else
                @if(Auth::user()->is_admin)
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin Dash</a>
            </li>
            @endif

            <li>
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
            </li>
            <li >
                <a class="nav-link" href="/about">About</a>
            </li>
            <li  >
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li  >
                <a class="nav-link" href="/shop">Shop</a>
            </li>
            <li class="nav-item dropdown">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Logout <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a style="color:black" class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            
            <div class=" ml-3 acct_user d-flex">
            <!-- util search -->
                <div class="circle1">
                    <img class="profile-pic" src="http://lorempixel.com/50/50/people" alt="profile picture">
                </div>

            </div>

            
            @endguest

        </ul>

        <div class=" ml-2 acct_srch d-flex">
            <!-- util search -->
            <div class="circle">
                <i class="fas fa-search"></i>
            </div>
            <!-- shopping cart -->
            <div class="ml-2 circle">
                <a href="/cart"> <i class="fas fa-shopping-cart"></i></a>

                @if(session('cart'))
                <div class="sml-circle">
                    <span class="text-center cart-blue-icon">{{ count((array) session('cart')) }}</span>
                </div>
                @endif
            </div>

        </div>

    </div>
</nav>
