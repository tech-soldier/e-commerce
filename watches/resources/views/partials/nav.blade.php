<nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" href="/"><img class="logo my-3" src="/storage/images/logo1.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

        <ul class="navbar-nav">

            @guest
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('shop')) ? 'active' : '' }}" href="/shop">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a>
            </li>

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @else
                @if(Auth::user()->is_admin)
            <li class="nav-item">
                <a class="nav-link" href="/admin">Admin</a>
            </li>
            @endif

            <li>
                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li  >
                <a class="nav-link {{ (request()->is('shop')) ? 'active' : '' }}" href="/shop">Shop</a>
            </li>
            <li >
                <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li  >
                <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="/contact">Contact</a>
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

                    <form id="logout-form" action="/logout_user" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>

            @endguest

        </ul>

        <div class="ml-3 top-search" >
                
            <form method="get" class="form-inline" action="{{ url('/shop_search') }}">
                @csrf
                
                <input type="search" class="form-control  searchbox" id="query" name="query" placeholder="Search" /> 
                <span class="input-group-btn">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                </span>    
             </form>

        </div>

        <div class="menu-top-wrapper">
            <div class=" ml-3 acct_user d-flex">
                <!-- util profile -->
                <a href="/profile">
                    <div class="circle1">
                        <?php if(!empty($user->image)) : ?>
                            <div class="user_image" style="background-image: url('/storage/images/{{$user->image}}')"></div>
                        <?php else : ?>
                            <div class="user_image">
                                <i class="fas fa-user-alt text-dark"></i>
                            </div>
                        <?php endif ; ?>
                    </div>                    
                </a>
            </div>
            <div class=" ml-2 acct_srch d-flex">
                <!-- util search -->                
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
    </div>

</nav>
<div class=" bottom-search " >
                
    <form method="get" class="form-inline" action="{{ url('/shop_search') }}">
        @csrf
        
        <input type="search" class="form-control mr-sm-2 searchbox1" id="query-bottom" name="query" placeholder="Search" /> 
        <span class="input-group-btn">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>                            
        </span>
        
     </form>

</div>
