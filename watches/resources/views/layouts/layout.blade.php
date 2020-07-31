
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Techwatch Website</title>

    <!-- Favicon  -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/styles.css">

</head>

<body>

    <!-- Header Area -->
   <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="/"><img class="logo my-2" src="/images/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="/shop">SHOP</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/about">ABOUT</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/contact">CONTACT</a>
          </li>
          


          <div class="col">
                <!-- Hero Meta -->
                <div class="hero_meta_area ml-auto d-flex align-items-center justify-content-end">
                    <!-- Search -->
                    <div class="search-area">
                        <div class="search-btn"><i class="fas fa-search"></i></div>
                        <!-- Form -->
                        <div class="search-form">
                            <input type="search" class="form-control" placeholder="Search">
                            <input type="submit" class="d-none" value="Send">
                        </div>
                    </div>

                    <!-- Cart -->
                    <div class="cart-area">
                        <div class="cart--btn"><i class="fas fa-shopping-cart"></i><span class="cart_quantity">2</span></div>

                        <!-- Cart Dropdown Content -->
                        <div class="cart-dropdown-content">
                            <ul class="cart-list">
                                <li>
                                    <div class="cart-item-desc">
                                        <a href="#" class="image">
                                            <img src="https://picsum.photos/500/500" class="cart-thumb" alt="">
                                        </a>
                                        <div>
                                            <a href="#">Swatch 800</a>
                                            <p>1 x - <span class="price">$140.99</span></p>
                                        </div>
                                    </div>
                                    <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                </li>
                                <li>
                                    <div class="cart-item-desc">
                                        <a href="#" class="image">
                                            <img src="https://picsum.photos/500/500" class="cart-thumb" alt="">
                                        </a>
                                        <div>
                                            <a href="#">Hublot Style</a>
                                            <p>2x - <span class="price">$270.99</span></p>
                                        </div>
                                    </div>
                                    <span class="dropdown-product-remove"><i class="icofont-bin"></i></span>
                                </li>
                            </ul>
                            <div class="cart-pricing my-4">
                                <ul>
                                    <li>
                                        <span>Sub Total:</span>
                                        <span>$822.96</span>
                                    </li>
                                    <li>
                                        <span>Shipping:</span>
                                        <span>$30.00</span>
                                    </li>
                                    <li>
                                        <span>Total:</span>
                                        <span>$856.63</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-box">
                                <a href="checkout-1.html" class="btn btn-primary d-block">Checkout</a>
                            </div>
                        </div>
                    </div>

                    <!-- Account -->
                    <div class="account-area">
                        <div class="user-thumbnail">
                            <img src="https://picsum.photos/500/500" alt="">
                        </div>
                        <ul class="user-meta-dropdown">
                            <li class="user-title"><span>Hello,</span> Lim Sarah</li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="order-list.html">Orders List</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="login.html"><i class="icofont-logout"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </ul>
        
      </div>
    </nav>

    <!-- Header Area End -->

    <!-- page content goes here -->
    @yield('content')

    <!-- Footer Area -->
    <footer class="footer_area section_padding_100_0">
        <div class="container">
            <div class="row">
                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-6">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Contact Us</h6>
                        </div>
                        <ul class="footer_content">
                            <li><span>Address:</span> Lords, London, UK - 1259</li>
                            <li><span>Phone:</span> 002 63695 24624</li>
                            <li><span>FAX:</span> 002 78965 369552</li>
                            <li><span>Email:</span> support@example.com</li>
                        </ul>
                        <div class="footer_social_area mt-15">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-3">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Information</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="icofont-rounded-right"></i> Your Account</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Free Shipping Policy</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Your Cart</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Return Policy</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Free Coupon</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Delivary Info</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Single Footer Area -->
                <div class="col-12 col-sm-6 col-md col-lg-4 col-xl-3">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading mb-4">
                            <h6>Account</h6>
                        </div>
                        <ul class="footer_widget_menu">
                            <li><a href="#"><i class="icofont-rounded-right"></i> Product Support</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Terms &amp; Conditions</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Help</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Payment Method</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Affiliate Program</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer_bottom_area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite_text">
                            <p>Copyright &copy; Pseudo Class 2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area -->

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="/js/scripts.js"></script>

</body>

</html>
