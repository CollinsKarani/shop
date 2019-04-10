

  <!-- BANNER STRAT -->
  <div class="banner inner-banner align-center">
    <section class="banner-detail">
      <h1 class="banner-title">Cart</h1>
      <div class="bread-crumb mt-30">
        <ul>
          <li><a href="index.html">Home</a>/</li>
          <li><span>Cart</span></li>
        </ul>
      </div>
    </section>
  </div>
  <!-- BANNER END -->

  <div class="mian-contain">
    <div class="container">

      <!-- CONTAIN START ptb-95-->
      <section class="ptb-95 ptb-sm-60 ptb-xs-30">
        <div class="row">
          <div class="col-xs-12 mb-xs-30">
            <div class="cart-item-table commun-table">
<?php  echo $this->cart->total_items();?>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Sub Total</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                       foreach($add_cart as $cart){
                      ?>
                    <tr>
                      <td><a href="product-page.html">
                        <div class="product-image img-circle"><img alt="Gecko" style="width: 100%; height: 100px;" src="<?php echo base_url();?>assets/products/<?php echo $cart['image']; ?>"></div>
                        </a></td>
                      <td><div class="product-title"> <a href="product-page.html"><?php echo $cart['name']; ?></a> </div></td>
                      <td>
                            <div class="base-price price-box"> <span class="price"><?php echo $cart['price']; ?></span> </div>
                         </td>
                      <td><input type="number" class="form-control text-center" value="<?php echo $cart['qty']; ?>" onchange="updateCartItem(this, '<?php echo $cart['rowid'];?>')"/></td>
                      <td><div class="total-price price-box"> <span class="price"><?php echo $cart['subtotal']; ?></span> </div></td>
                      <td> <a href="<?php echo site_url('site/remove/'.$cart['rowid']); ?>"><i title="Remove Item From Cart" data-id="100" class="fa fa-trash cart-remove-item"></i></a> </td>
                    </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-30">
          <div class="row">
            <div class="col-sm-6">
              <div class="mt-30"> <a href="<?php echo base_url('site/index');?>" class="btn btn-primary"><span><i class="fa fa-angle-left"></i></span>Continue Shopping</a> </div>
            </div>
            <div class="col-sm-6">
              <div class="mt-30 right-side float-none-xs"> <a class="btn btn-black">Update Cart</a> </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="mtb-30">
          <div class="row">
            <div class="col-sm-6 mb-xs-40">
              <div class="estimate">
                <div class="heading-part mb-20">
                  <h3 class="sub-heading">Estimate shipping and tax</h3>
                </div>
                <form class="full">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="input-box mb-20">
                        <select id="country_id">
                          <option selected="" value="">Select Country</option>
                          <option value="1">India</option>
                          <option value="2">China</option>
                          <option value="3">Pakistan</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-box mb-20">
                        <select id="state_id">
                          <option selected="" value="1">Select State/Province</option>
                          <option value="2">---</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="input-box mb-20">
                        <select id="city_id">
                          <option selected="" value="1">Select City</option>
                          <option value="2">---</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="cart-total-table commun-table">
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
            </div>
          </div>
        </div>
        <hr>
        <div class="mt-30">
          <div class="row">
            <div class="col-xs-12">
              <div class="right-side float-none-xs"> <a href="<?php echo base_url('site/checkout');?>" class="btn btn-info">Proceed to checkout<span><i class="fa fa-angle-right"></i></span></a> </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CONTAINER END --> 
    </div>
  </div>
