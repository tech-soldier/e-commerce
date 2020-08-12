<footer class="footer_area pt-5">
        <div class="container">
            <div class="row">
                <!-- Single Footer Area -->
                <!-- footer col 1 -->
                <div class="col-md-5 col-sm-12">
                    <div class="single_footer_area mb-100">
                        <div class="footer_heading">
                            <img class="logo my-3" src="/storage/images/logo1.png" alt="logo">
                            <!-- <h6>CONTACT US</h6> -->
                        </div>
                        <ul class="footer_content">
                            <li><span>Address:</span> 460 Portage Ave. Winnipeg, Canada</li>
                            <li><span>Phone:</span> 204 666 3333</li>
                            <li><span>FAX:</span> 204 666 4444</li>
                            <li><span>Email:</span> techwatch7@gmail.com</li>
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
                    
                            

                        
                
                    <!-- Single Footer Area -->
                    <div class="col-6">
                        <div class="single_footer_area mb-100">
                            <div class="footer_heading mb-4 mt-4">
                                <h6>TECHWATCH</h6>
                            </div>
                            <ul class="footer_widget_menu">
                                <li><a href="/"><i class="icofont-rounded-right"></i> Home</a></li>
                                <li><a href="/shop"><i class="icofont-rounded-right"></i> Shop</a></li>
                                <li><a href="/about"><i class="icofont-rounded-right"></i> About</a></li>
                                <li><a href="/contact"><i class="icofont-rounded-right"></i> Contact</a></li>
                            </ul>

                        </div>



        
                    </div>

                    <div class="col-6">
                        <div class="single_footer_area mb-100">
                            <div class="footer_heading mb-4 mt-4">
                                <h6>INFORMATION</h6>
                                <p class="footer_para" style="margin-top:1.5rem; line-height: 24px;">We have a wide range of products from sports watches, to formal watches. There are plenty of styles for women and men and watch band sizes from narrow to thick, in many different colors to suit your style, whatever that may be!We offer hassle-free online shopping for our customers throughout Canada. Take a minute to check out our store and see what we have for you!</p>
                            </div>
                            

                        </div>
                    </div>

                </div>  <!-- /. end footer col 2-->  
            </div> <!-- /. footer row -->
        </div> <!-- /. footer container -->

        <!-- Footer Bottom -->
        <div class="footer_bottom_area">
            <div class="container">
                
                <p class="text-center pb-5 my-0">Copyright &copy; TechWatch 2020</p>
                            
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
        $(".flash-area").delay(2500).slideUp(2500);
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
