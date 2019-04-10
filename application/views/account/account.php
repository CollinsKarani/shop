
  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center">
    <section class="banner-detail">
      <h1 class="banner-title">Account </h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="<?php echo base_url('Site/index');?>">Home</a>/</li>
          <li><span>Account</span></li>
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
          <div class="col-md-3 col-sm-4">
            <div class="account-sidebar account-tab mb-xs-30">
              <div class="dark-bg tab-title-bg">
                <div class="heading-part">
                  <div class="sub-title"><span></span> My Account</div>
                </div>
              </div>
              <div class="account-tab-inner">
                <ul class="account-tab-stap">
                  <li id="step1" class="active"> <a href="javascript:void(0)">My Dashboard<i class="fa fa-angle-right"></i> </a> </li>
                  <li id="step2"> <a href="javascript:void(0)">New Products<i class="fa fa-angle-right"></i> </a> </li>
                  <li id="step3"> <a href="javascript:void(0)">My Order List<i class="fa fa-angle-right"></i> </a> </li>
                  <li id="step4"> <a href="javascript:void(0)">Change Password<i class="fa fa-angle-right"></i> </a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9 col-sm-8">
            <div id="data-step1" class="account-content" data-temp="tabdata">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading-part heading-bg mb-30">
                    <h2 class="heading m-0"><i class="fa fa-clock-o" aria-hidden="true"></i>Account Dashboard</h2>
                  </div>
                </div>
              </div>
              <div class="mb-30">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="heading-part">
                      <h3 class="sub-heading">Hello, Denial</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus nibh at mattis pretium. Aenean vestibulum, leo in tincidunt malesuada, augue turpis maximus magna, ac sollicitudin erat tortor eu nulla.</p>
                  </div>
                </div>
              </div>
              <div class="m-0">
                <div class="row">
                  <div class="col-xs-12 mb-20">
                    <div class="heading-part">
                      <h3 class="sub-heading">Account Information</h3>
                    </div>
                    <hr>
                  </div>
                  <div class="col-sm-6">
                    <div class="cart-total-table address-box commun-table">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Shipping Address</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><ul>
                                  <li class="inner-heading"> <b>Denial tom</b> </li>
                                  <li>
                                    <p>5-A kadambari aprtment,opp. vasan eye care,</p>
                                  </li>
                                  <li>
                                    <p>Risalabaar,City Road, deesa-405001.</p>
                                  </li>
                                  <li>
                                    <p>India</p>
                                  </li>
                                </ul></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="cart-total-table address-box commun-table">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Billing Address</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><ul>
                                  <li class="inner-heading"> <b>Denial tom</b> </li>
                                  <li>
                                    <p>5-A kadambari aprtment,opp. vasan eye care,</p>
                                  </li>
                                  <li>
                                    <p>Risalabaar,City Road, deesa-405001.</p>
                                  </li>
                                  <li>
                                    <p>India</p>
                                  </li>
                                </ul></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="data-step2" class="account-content" data-temp="tabdata" style="display:none">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading-part heading-bg mb-30">
                    <h2 class="heading m-0"><i class="fa fa-clock-o" aria-hidden="true"></i>Add Shop Items</h2>
                  </div>
                </div>
              </div>
              <div class="m-0">


                <form class="main-form full" method="post" action="<?php echo base_url('Site/add_product');?>" enctype="multipart/form-data">
                  <div class="mb-20">
                    <div class="row">
                      <div class="col-xs-12 mb-20">
                        <div class="heading-part">
                          <h3 class="sub-heading">New Shop Items</h3>
                        </div>
                        <hr>
                      </div>

                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required="" name="product_name" placeholder="Product Name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required="" name="price" placeholder="Product Price">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required="" name="quantity_available" placeholder="Quantity Available">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="input-box">
                          <input type="text" required="" name="description" placeholder="Description">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="input-box">
                          <input type="file" required="" name="product_image" placeholder="">
                          <span>Please images less than 2mbs.</span> </div>
                      </div>

                      <div class="col-xs-12">
                      <button name="save" type="submit" class="btn-color right-side">Submit</button>
                    </div>
                    </div>
                  </div>

                </form>
              </div>
            </div>
            <div id="data-step3" class="account-content" data-temp="tabdata" style="display:none">
             <div id="form-print" class="admission-form-wrapper">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="heading-part heading-bg mb-30">
                      <h2 class="heading m-0"><i class="fa fa-clock-o" aria-hidden="true"></i>My Products</h2>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 mb-xs-30">
                    <div class="cart-item-table commun-table">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th > Image  </th>
                              <th > Product Name </th>
                              <th > Description </th>
                              <th > Price. </th>
                              <th > Quantity </th>
                              <th > Action </th>


                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <?php
                                foreach($product_list as $list):
                                    ?>

                              <td><a href="product-page.html">
                                <div class="product-image"><img  src="<?php echo base_url(); ?>assets/products\product1.jpg"></div>
                                </a></td>
                                   <td><div class=""> <?php echo $list['product_name'];?> </div></td>
                                <td><div class="product-title"> <a href=""><?php echo $list['description'];?></a> </div>
                                </td>
                                <td><div class="base-price price-box"> <span class="price"><?php echo $list['price'];?></span> </div></td>
                                <td><div class=""> <?php echo $list['quantity_available'];?> </div></td>
                              <td> <i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></td>
                            </tr>
                            <?php
                             endforeach;
                                ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="data-step4" class="account-content" data-temp="tabdata" style="display:none">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading-part heading-bg mb-30">
                    <h2 class="heading m-0"><i class="fa fa-clock-o" aria-hidden="true"></i>Change Password</h2>
                  </div>
                </div>
              </div>
              <form class="main-form full">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="input-box">
                      <label for="old-pass">Old-Password</label>
                      <input type="password" placeholder="Old Password" required="" id="old-pass">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-box">
                      <label for="login-pass">Password</label>
                      <input type="password" placeholder="Enter your Password" required="" id="login-pass">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="input-box">
                      <label for="re-enter-pass">Re-enter Password</label>
                      <input type="password" placeholder="Re-enter your Password" required="" id="re-enter-pass">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button class="btn-color" type="submit" name="submit">Change Password</button>
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

