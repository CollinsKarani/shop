
  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center">
    <section class="banner-detail">
      <h1 class="banner-title">Order Overview</h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="index.html">Home</a>/</li>
          <li><a href="cart.html">Cart</a>/</li>
          <li><span>Order Overview</span></li>
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
          <div class="col-xs-12">
            <div class="checkout-step mb-40">
              <ul>
                <li> <a href="checkout.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">1</div>
                  </div>
                  <span>Shipping</span> </a> </li>
                <li class="active"> <a href="order-overview.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">2</div>
                  </div>
                  <span>Order Overview</span> </a> </li>
                <li> <a href="payment.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">3</div>
                  </div>
                  <span>Payment</span> </a> </li>
                <li> <a href="order-complete.html">
                  <div class="step">
                    <div class="line"></div>
                    <div class="circle">4</div>
                  </div>
                  <span>Order Complete</span> </a> </li>
                <li>
                  <div class="step">
                    <div class="line"></div>
                  </div>
                </li>
              </ul>
              <hr>
            </div>
            <div class="checkout-content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="heading-part align-center">
                    <h2 class="heading">Order Overview</h2>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8 mb-sm-30">
                  <div class="cart-item-table commun-table mb-30">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                      <th>Product</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Sub Total</th>

                    </tr>
                        </thead>
                        <tbody>
                              <?php
                       foreach($add_cart as $cart):
                      ?>
                          <tr>
                            <td><a href="product-page.html">
                               <div class="product-image img-circle"><img alt="Gecko" style="width: 100%; height: 100px;" src="<?php echo base_url();?>assets/products/<?php echo $cart['image']; ?>"></div>
                              </a></td>
                            <td><div class="product-title"> <a href="product-page.html"><?php echo $cart['name']; ?></a> </div></td>
                            <td><div class="base-price price-box"> <span class="price"><?php echo $cart['price']; ?></span> </div></td>
                            <td><?php echo $cart['qty']; ?></td>
                             <td><div class="total-price price-box"> <span class="price"><?php echo $cart['subtotal']; ?></span> </div></td>

                          </tr>
                           <?php endforeach; ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="cart-total-table commun-table mb-30">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th colspan="2">Cart Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Item(s) Subtotal</td>
                            <td><div class="price-box"> <span class="price"><?php echo $this->cart->total(); ?></span> </div></td>
                          </tr>
                          <tr>
                            <td>Shipping</td>
                            <td><div class="price-box"> <span class="price">$0.00</span> </div></td>
                          </tr>
                          <tr>
                            <td><b>Amount Payable</b></td>
                            <td><div class="price-box"> <span class="price"><b><?php echo $this->cart->total(); ?></b></span> </div></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="right-side float-none-xs"> <a href="<?php echo base_url('site/place_order'); ?>" class="btn btn-info">Place Order</a> </div>
                </div>
                <div class="col-sm-4">
                  <div class="cart-total-table address-box commun-table mb-30">
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
        </div>
      </section>
      <!-- CONTAINER END --> 
    </div>
  </div>
