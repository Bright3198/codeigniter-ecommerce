<!DOCTYPE HTML>
<head>
    <title>Store Website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo base_url() ?>assets/web/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url() ?>assets/web/css/menu.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url() ?>assets/web/css/styl.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="<?php echo base_url() ?>assets/web/js/jquerymain.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/nav.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/easing.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>assets/web/js/nav-hover.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        $(document).ready(function ($) {
            $('#dc_mega-menu-orange').dcMegaMenu({rowItems: '4', speed: 'fast', effect: 'fade'});
        });
    </script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('uploads/'); ?><?php echo get_option('site_logo'); ?>" />

</head>
<body>
    <div class="wrap">
        <div class="header_top">
            <div class="logo">
                <a href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('uploads/'); ?><?php echo get_option('site_logo'); ?>" alt="" /></a>
            </div>
            <div class="header_top_right">
                <div class="search_box">
                    <form method="get" action="<?php echo base_url('search')?>">
                        <input type="text" placeholder="Search for Products" name="search">
                        <input type="submit" value="SEARCH">
                    </form>
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <a href="<?php echo base_url('cart');?>" title="View my shopping cart" rel="nofollow">
                            <span class="cart_title">Cart</span>
                            <span class="no_product">(<?php echo $this->cart->total_items();?> Items)</span>
                        </a>
                    </div>
                </div>
                <?php
                $customer_id = $this->session->userdata('customer_id');
                if ($customer_id) {
                    ?>
                    <div class="login"><a href="<?php echo base_url('/customer/logout'); ?>">Logout</a></div>
                <?php } else {
                    ?>
                    <div class="login"><a href="<?php echo base_url('/customer/login'); ?>">Login</a></div>

                    <?php
                }
                ?>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="<?php echo base_url('/'); ?>" class="<?php
                if ($this->uri->uri_string() == '') {
                    echo "active";
                }
                ?>">Home</a>
  <a href="<?php echo base_url('/product'); ?>" class=" <?php
                if ($this->uri->uri_string() == 'product') {
                    echo "active";
                }
                ?>">product</a>
  <div class="dropdown">
    <button class="dropbtn">category 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">shoes </a>
      <a href="#">clothes</a>
      <a href="#">accessories</a>
    </div>
  </div> 
  <a href="<?php echo base_url('/cart'); ?>" class=" <?php
                    if ($this->uri->uri_string() == 'cart') {
                        echo "active";
                    }
                    ?> ">Cart</a>
  <a href="<?php echo base_url('/contact'); ?>" class=" <?php
                if ($this->uri->uri_string() == 'contact') {
                    echo "active";
                }
                ?>">Contact</a>
  <a href="<?php echo base_url('/customer/register'); ?>" class=" <?php
                if ($this->uri->uri_string() == 'customer/register') {
                    echo "active";
                }
                ?>">register</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>