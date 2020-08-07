<footer class="footer_area pt-5">
        <div class="container">
            <div class="row">
                <!-- Single Footer Area -->
                <!-- footer col 1 -->
                <div class="col-md-5 col-sm-12">
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
                            <a href="#" style="padding-left:0;"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                        </div>

                    </div>
                </div>  <!-- /. end footer col 1 -->

                <!-- footer col 2 -->
                <div class="col-md-7 col-sm-12 d-flex  ">
                    <!-- Single Footer Area -->
                    <div class="col-6">
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
                    <div class="col-6">
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
                </div>  <!-- /. end footer col 2-->  
            </div> <!-- /. footer row -->
        </div> <!-- /. footer container -->

        <!-- Footer Bottom -->
        <div class="footer_bottom_area">
            <div class="container">
                
                <p class="text-center pb-5">Copyright &copy; PseudoClass 2020</p>
                            
            </div>
        </div>

    </footer> 

    <!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="/js/main.js"></script>

<!-- custom scripts (will need to be removed to main js file) -->
<script>
    $(document).ready(function(){

        // when 'my orders' button clicked
        $('#button_orders').click(function(){
            //show or hide (toggle) orders table
            $('#orders_hidden').slideToggle();
            // if page is at top scroll down a little
            if($(window).scrollTop() === 0) {
                $('html,body').animate({
                   scrollTop: $(window).scrollTop() + 120
                });                 
            }
            // toggle 'my orders' and 'hide orders' accordingly
            if($(this).html() == 'see orders'){
                $('#button_orders').html('hide orders');
            }else{
                $('#button_orders').html('see orders');
            }
        });

    });
</script>

</body>

</html>
