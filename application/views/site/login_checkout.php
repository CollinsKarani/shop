﻿
  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center">
    <section class="banner-detail">
      <h1 class="banner-title">Login</h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="<?php echo base_url('Site/index');?>">Home</a>/</li>
          <li><span>Login</span></li>
        </ul>
      </div>
    </section>
  </div>
  <!-- BANNER END -->
  
  <div class="mian-contain">
    <div class="container">
      
      <!-- CONTAIN START ptb-95-->
      <section class="checkout-section ptb-95 ptb-sm-60 ptb-xs-30">
        <div class="row">
          <div class="col-md-3">
            <div class="row">
                <form action="<?php echo base_url('Site/Signin_checkout');?>" method="post" class="main-form full">
                  <div class="row">
                    <div class="col-xs-12 mb-20">
                      <div class="heading-part heading-bg">
                        <h2 class="heading"><i class="fa fa-clock-o" aria-hidden="true"></i>Customer Login</h2>
                      </div>
                      <?php
                    if(isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                    }
                    ?>
                    </div>

                    <div class="col-xs-12">
                      <div class="input-box">
                        <label for="login-email">Email address</label>
                        <input id="login-email" type="email" name="email" required="" placeholder="Email Address">
                      </div>
                    </div>
                    <div class="col-xs-12">
                      <div class="input-box">
                        <label for="login-pass">Password</label>
                        <input id="login-pass" type="password"  name="password" required="" placeholder="Enter your Password">
                      </div>
                    </div>
                    <div class="col-xs-12">

                      <button name="login" type="submit" class="btn-color left-side">Log In</button>
                      <a href="<?php echo base_url('site/register_checkout');?>" class="btn btn-warning  left-side">Create Account</a>
                    </div>
                    <div class="col-xs-12"> <a title="Forgot Password" class="forgot-password mtb-20" href="#">Forgot your password?</a>
                      <hr>
                    </div>
                  </div>
                </form>

            </div>
          </div>
           <div class="col-md-1"></div>


          <div class="col-md-8">
            <div class="row">
                <form action="<?php echo base_url('Site/registerToCheckout');?>" method="post" class="main-form full" action="">
                  <div class="row">
                    <div class="col-xs-12 mb-20">
                      <div class="heading-part heading-bg">
                        <h2 class="heading"><i class="fa fa-clock-o" aria-hidden="true"></i>Create your account</h2>
                      </div>
                      <?php
                           if(isset($_SESSION['success'])){
                                     echo  $_SESSION['success'];

                                }
                                 elseif(isset($_SESSION['error'])){
                                    echo $_SESSION['error'];
                                 }

                      ?>
                    </div>
                    <div class="row">
                          <div class="col-xs-6">
                      <div class="input-box">
                        <label for="f-name">First Name</label>
                        <input type="text" id="f-name" required="" name="fname" placeholder="First Name">
                      </div>
                    </div>

                    <div class="col-xs-6">
                      <div class="input-box">
                        <label for="l-name">Last Name</label>
                        <input type="text" id="l-name" required="" name="lname" placeholder="Last Name">
                      </div>
                    </div>
                    </div>
                     <div class="row">
                       <div class="col-xs-6">
                      <div class="input-box">
                        <label for="login-email">Email address</label>
                        <input id="login-email" type="email" required="" name="email" placeholder="Email Address">
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="input-box">
                        <label for="phone_number">Phone Number</label>
                        <input id="phone_number" type="text" required="" name="phone" placeholder="Phone number">
                      </div>
                    </div>
                     </div>


                    <div class="col-xs-12">
                      <div class="input-box">
                        <label for="login-pass">Password</label>
                        <input id="login-pass" type="password" required="" name="password" placeholder="Enter your Password">
                      </div>
                    </div>

                    <div class="col-xs-12">
                      <button name="submit" type="submit" class="btn-color right-side">Submit</button>
                    </div>
                    <div class="col-xs-12">
                      <hr>
                      <div class="new-account align-center mt-20"> <span>Already have an account with us</span> <a class="link" title="Register with Gecko" href="<?php echo base_url('Site/login');?>">Login Here</a> </div>
                    </div>
                  </div>
                </form>

            </div>
          </div>

        </div>
      </section>
      <!-- CONTAINER END --> 
    </div>
  </div>

  <!--  Newsletter Block Start  --> 
  <section class="newsletter-bg-color">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="newsletter">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-offset-1">
                <div class="newsletter-inner">
                  <h2 class="main_title">Subscribe to receive 10% off*</h2>
                </div>
              </div>
              <div class="col-md-5 col-sm-5">
                <div class="newsletter-inner">
                  <form>
                    <input type="email" placeholder="Email Here...">
                    <button class="btn-black" title="Subscribe">Subscribe</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  Newsletter Block Start  --> 
 