<nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" href="/"><img class="logo my-2" src="/images/logo1.png" alt="logo"></a>
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
            
            @endguest

        </ul>

        <div class=" ml-5 acct_srch d-flex">
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
