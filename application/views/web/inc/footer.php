
</div>
<div class="footer">
    <div class="wrapper">
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                    <li><a href="contact">About Us</a></li>
                    <li><a href="contact">Customer Service</a></li>
                    <li><a href="contact"><span>Advanced Search</span></a></li>
                    <li><a href="contact">Orders and Returns</a></li>
                    <li><a href="contact"><span>Contact Us</span></a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Why buy from us</h4>
                <ul>
                    <li><a href="contact">About Us</a></li>
                    <li><a href="contact">Customer Service</a></li>
                    <li><a href="contact">Privacy Policy</a></li>
                    <li><a href="contact"><span>Site Map</span></a></li>
                    <li><a href="preview.html"><span>Search Terms</span></a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>My account</h4>
                <ul>
                    <li><a href="customer/login">Sign In</a></li>
                    <li><a href="cart">View Cart</a></li>
                    <li><a href="cart">My Wishlist</a></li>
                    <li><a href="contact">Track My Order</a></li>
                    <li><a href="contact">Help</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Contact</h4>
                <ul>
                    <li><span><?php echo get_option('site_contact_num1');?></span></li>
                    <li><span><?php echo get_option('site_contact_num2');?></span></li>
                </ul>
                <div class="social-icons">
                    <h4>Follow Us</h4>
                    <ul>
                        <li class="facebook"><a href="<?php echo get_option('site_facebook_link');?>" target="_blank"> </a></li>
                        <li class="twitter"><a href="<?php echo get_option('site_twitter_link');?>" target="_blank"> </a></li>
                        <li class="googleplus"><a href="<?php echo get_option('site_google_plus_link');?>" target="_blank"> </a></li>
                        <li class="contact"><a href="<?php echo get_option('site_email_link');?>" target="_blank"> </a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p><b>Msikawathu mw</b></p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
<link href="<?php echo base_url()?>assets/web/css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="<?php echo base_url()?>assets/web/js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
</body>
</html>
