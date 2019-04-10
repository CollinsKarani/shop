       <?php
if (!$this->session->userdata('is_logged_in')){
    redirect('Site/login');

}




?>

<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>Shopping Cart</title>
<!-- SEO Meta
  ================================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="Nairobi">
<meta name="" content="">
<meta name="" content="">
<meta name="rating" content="8 YEARS">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">
<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
  ================================================== -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css\font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css\bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css\jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css\owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css\fotorama.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css\magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css\custom.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css\responsive.css">
<link rel="shortcut icon" href="<?php echo base_url();?>assets/images\favicon.png">
<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/images/apple-touch-icon-114x114.png">
</head>
<body class="homepage">
<div class="main">
  <!-- HEADER START -->
   <header class="navbar navbar-custom" id="header">
    <div class="header-top">
      <div class="container">
        <div class="header-inner">
          <div class="row">
            <div class="col-md-4">
                 <h2>Shopping Cart</h2>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
              <div class="navbar-header align-center float-left-sm"> <a class="navbar-brand page-scroll" href="index.html"> <img alt="Onlineshop" src="<?php echo base_url();?>/assets/images\test.png" style="height: 100px; width: 300px;"> </a> </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
              <div class="right-side float-none-sm position-r">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                <!-- <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-close"></i></button> -->
                <div class="right-side float-left-xs header-right-link">
                  <ul>
                    <li class="main-search">
                      <div class="header_search_toggle desktop-view">
                        <form>
                          <div class="search-box">
                            <input class="input-text" type="text" placeholder="Search entire store here...">
                            <button class="search-btn"></button>
                          </div>
                        </form>
                      </div>
                    </li>
                    <li class="account-icon"> <a href="#"><span></span></a>
                      <div class="header-link-dropdown account-link-dropdown">
                        <ul class="link-dropdown-list">
                          <li> <span class="dropdown-title">Account Section</span>
                            <ul>
                              <li><a href="<?php echo base_url('Site/login')?>">Sign In</a></li>
                              <li><a href="<?php echo base_url('Site/register')?>">Create an Account</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </li>

                    <!-- Start of the CART section -->
                    <li class="cart-icon"><a href="#"> <span> <small class="cart-notification">2</small> </span> </a>
                      <div class="cart-dropdown header-link-dropdown">
                        <ul class="cart-list link-dropdown-list">
                          <li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
                            <div class="media"> <a class="pull-left"> <img alt="Onlineshop" src="<?php echo base_url();?>/assets/images\2.jpg"></a>
                              <div class="media-body"> <span><a>Apples</a></span>
                                <p class="cart-price">Ksh. 30</p>
                                <div class="product-qty">
                                  <label>Qty:</label>
                                  <div class="custom-qty">
                                    <input type="number" name="qty" value="1" title="Qty" class="input-text qty">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
                        <div class="clearfix"></div>
                        <div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
                      </div>
                    </li>

                    <!-- End CART section -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="header_search_toggle mobile-view">
            <form>
              <div class="search-box">
                <input class="input-text" type="text" placeholder="Search entire store here...">
                <button class="search-btn"></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
       <div class="container">
         <div id="menu" class="navbar-collapse collapse align-center" style="color: #0A8202;">
          <ul class="nav navbar-nav navbar-left">
            <li class="level"> <span class="opener plus"></span> <a href="<?php echo base_url('Site/index')?>" class="page-scroll">Home</a>

            </li>
      <li class="level"> <span class="opener plus"></span> <a href="shop.html" class="page-scroll">Nearest Shop</a>
              <div class="megamenu mobile-sub-menu">
                <div class="megamenu-inner-top">
                  <ul class="sub-menu-level1">
                    <li class="level2"> <a href="shop.html"><span>Women Clothings</span></a>
                      <ul class="sub-menu-level2">
                        <li class="level3"><a href="shop.html"><span>■</span>Dresses</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Sport Jeans</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Skirts</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Tops</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Sleepwear</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Jeans</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="level"><a href="shop.html" class="page-scroll">Juniors <div class="menu-label"><span class="hot-menu p-label"> Hot </span></div></a></li>
            <li class="level"> <span class="opener plus"></span> <a href="shop.html" class="page-scroll">Kids</a>
              <div class="megamenu mobile-sub-menu">
                <div class="megamenu-inner-top">
                  <ul class="sub-menu-level1">
                    <li class="level2"> <a href="shop.html"><span>Kids Fashion</span></a>
                      <ul class="sub-menu-level2 ">
                        <li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
                        <li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="level"><a href="shop.html" class="page-scroll">Baby <div class="menu-label"><span class="new-menu p-label"> New </span></div></a></li>
            <li class="level"> <span class="opener plus"></span> <a class="page-scroll">Pages</a>
              <div class="megamenu mobile-sub-menu">
                <div class="megamenu-inner-top">
                  <ul class="sub-menu-level1">
                    <li class="level2">
                      <ul class="sub-menu-level2 ">
                        <li class="level3"><a href="about.html"><span>■</span>About Us</a></li>
                        <li class="level3"><a href="account.html"><span>■</span>Account</a></li>
                        <li class="level3"><a href="checkout.html"><span>■</span>Checkout</a></li>
                        <li class="level3"><a href="contact.html"><span>■</span>Contact</a></li>
                        <li class="level3"><a href="404.html"><span>■</span>404 Error</a></li>
                        <li class="level3"><a href="blog.html"><span>■</span>Blog</a></li>
                        <li class="level3"><a href="single-blog.html"><span>■</span>Single Blog</a></li>
                        <li class="level3"><a href="wishlist.html"><span>■</span>Wishlist</a></li>
                        <li class="level3"><a href="compare.html"><span>■</span>Compare</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
         </div>
       </div>
    </div>
  </header>
  <!-- HEADER END -->