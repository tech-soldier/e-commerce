<nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" href="/"><img class="logo my-2" src="/images/logo1.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="{{ Request::is('/') ? "active nav-link": "nav-link" }}" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="{{ Request::is('shop') ? "active nav-link" : "nav-link" }}" href="/shop">SHOP</a>
            </li>
            <li class="nav-item">
                <a class="{{ Request::is('about') ? "active nav-link": "nav-link" }}" href="/about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="{{ Request::is('contact') ? "active nav-link" : "nav-link" }}" href="/contact">CONTACT</a>
            </li>
        </ul>

        <div class=" ml-5 acct_srch d-flex">
            <!-- util search -->
            <div class="circle">
                <i class="fas fa-search"></i>
            </div>
            <!-- shopping cart -->
            <div class="ml-2 circle">
                <a href="/cart"> <i class="fas fa-shopping-cart"></i></a>
                <div class="sml-circle">
                    <span class="text-center cart-blue-icon">2</span>
                </div>
            </div>
            <div class="ml-2 circle act-circle">
            </div>
        </div>

    </div>
</nav>
