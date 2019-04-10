

  <!-- BANNER STRAT -->
  <div class="banner">
    <div class="main-banner">


      <div class="item">
       <img src="<?php echo base_url();?>/assets/images\banner1.jpg" alt="Gecko">
        <div class="banner-detail">
          <div class="container">
            <div class="banner-detail-inner"> <span class="slogan">THE DESIRED COLLECTION</span>
              <h1 class="banner-title">Gecko For Luxury Watches</h1>
              <span class="sub-title">Lorem ipsum dolor sit amet. It has ipsum survived not only irosum .</span><br>
              <a href="shop.html" class="btn btn-color big-width">Shop Now</a> 
            </div>
          </div>
        </div>
      </div>

      <div class="item"> 
       <img src="<?php echo base_url();?>/assets/images\banner2.jpg" alt="Gecko">
        <div class="banner-detail">
          <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12"></div>
            <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
              <div class="banner-detail-inner"> <span class="slogan1">THE DESIRED COLLECTION</span>
                <h1 class="banner-title1">Stylish & utilitarian wristwatch</h1>
                <span class="sub-title">Lorem ipsum dolor sit amet. It has ipsum survived not only irosum .</span><br>
                <a href="shop.html" class="btn btn-color big-width">Shop Now</a> 
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="item"> 
       <img src="<?php echo base_url();?>/assets/images\banner3.jpg" alt="Gecko">
        <div class="banner-detail">
          <div class="container">
            <div class="banner-detail-inner"> <span class="slogan">THE DESIRED COLLECTION</span>
              <h1 class="banner-title">Gecko For Luxury Watches</h1>
              <span class="sub-title">Lorem ipsum dolor sit amet. It has ipsum survived not only irosum .</span><br>
              <a href="shop.html" class="btn btn-color big-width">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="texture-bottom"></div> -->
  </div>
  <!-- BANNER END -->

  <div class="mian-contain">
    <div class="">


      <!--  Sub-banner Block Start  --> 
      
      <!--  Our Products Block Start  -->
      <section class="ptb-95 ptb-sm-60 ptb-xs-30">
        <div class="container">
          <div class="product-slider">
            <div class="row">

              <div class="col-xs-12">
                <div class="heading-part align-center">
                  <h2 class="main_title">Our Products</h2>
                  <div id="tabs" class="category-bar mb-20">
                    <ul class="tab-stap">
                      <li><a class="tab-step1 selected" title="step1">Best seller</a></li>
                      <li>-</li>
                      <li><a class="tab-step2" title="step2">New Products</a></li>
                      <li>-</li>
                      <li><a class="tab-step3" title="step3">Special Products</a></li>
                    </ul>
                  </div>
                </div>
              </div>


            </div>
            <div class="row">
              <div class="">
                <div class="items">
                  <div class="tab_content pro_cat">
                    <ul>
                      <li>
                        <div id="data-step1" class="items-step1 selected product-slider-main position-r" data-temp="tabdata">
                                                                   <?php
        foreach($product_list as $list):
        ?>
                          <div class="col-md-3 col-sm-4 col-xs-6 mb-30 best-pro-col">
                              <div class="well">
                            <div class="product-item">
                             <div class="sale-label"><span>Sale</span></div>
                              <div class="product-image"> 
                               <a href="product-page.html"> <img style="width:300px; height: 250px;" src="<?php echo base_url();?>/assets/products/<?php echo $list['product_image']?>" alt=""> </a>
                                <div class="product-detail-inner">
                                  <div class="detail-inner-left">
                                    <ul>
                                      <li class="pro-cart-icon"><a href="" title="Add To Cart"></a></li>
                                      <li class="pro-wishlist-icon active"><a href="wishlist.html" title="Wishlist"></a></li>
                                      <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                    </ul>
                                  </div>
                                  <div class="rating-summary-block right-side"></div>
                                </div>
                              </div>
                              <div class="product-item-details">
                                <div class="product-item-name"> <a href="product-page.html"><?php echo $list['product_name']; ?></a> </div>
                                <div class="price-box"> <span class="price"><?php echo $list['price'];?></span> <del class="price old-price"></del> </div>
                                <a class="btn btn-info btn-md" href="<?php echo base_url('Site/addto_cart/'.$list['product_id']);?>">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                <?php
                        // Create form and send values in 'shopping/add' function.
//                        echo form_open('site/add');
//                        echo form_hidden('id', $list['product_id']);
//                        echo form_hidden('name',$list['product_name']);
//                        echo form_hidden('price', $list['price']);
//                        echo form_hidden('image', $list['product_image']);
//                        ?>
<!---->
<!--                          <form action="site/add" method="post">-->
<!--                             <button type="submit" class="btn btn-primary" title="Order Now"><i class="flaticon-commerce"></i> <span>Order Now</span> </button>-->
<!---->
<!--                         </form>-->

                              </div>
                            </div>
                              </div>

                          </div>
                          <?php endforeach; ?>
                          <!--<div class="col-md-3 col-sm-4 col-xs-6 mb-30 best-pro-col">
                            <div class="product-item">
                             <div class="sale-label"><span>Sale</span></div>
                              <div class="product-image"> <a href="product-page.html"> <img src="<?php echo base_url();?>/assets/images\2.jpg" alt=""> </a>
                                <div class="product-detail-inner">
                                  <div class="detail-inner-left">
                                    <ul>
                                      <li class="pro-cart-icon"><a href="cart.html" title="Add To Cart"></a></li>
                                      <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                      <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                    </ul>
                                  </div>
                                  <div class="rating-summary-block right-side"></div>
                                </div>
                              </div>
                              <div class="product-item-details">
                                <div class="product-item-name"> <a href="product-page.html">Fastford Platinum Black</a> </div>
                                <div class="price-box"> <span class="price">$120.00</span> <del class="price old-price"></del> </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-4 col-xs-6 mb-30 best-pro-col">
                            <div class="product-item">
                              <div class="product-image"> <a href="product-page.html"> <img src="<?php echo base_url();?>/assets/images\3.jpg" alt=""> </a>
                                <div class="product-detail-inner">
                                  <div class="detail-inner-left">
                                    <ul>
                                      <li class="pro-cart-icon"><a href="cart.html" title="Add To Cart"></a></li>
                                      <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                      <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                    </ul>
                                  </div>
                                  <div class="rating-summary-block right-side"></div>
                                </div>
                              </div>
                              <div class="product-item-details">
                                <div class="product-item-name"> <a href="product-page.html">Fastford Platinum Black</a> </div>
                                <div class="price-box"> <span class="price">$120.00</span> <del class="price old-price"></del> </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-4 col-xs-6 mb-30 best-pro-col">
                            <div class="product-item">
                             <div class="new-label"><span>New</span></div>
                              <div class="product-image"> <a href="product-page.html"> <img src="<?php echo base_url();?>/assets/images\4.jpg" alt=""> </a>
                                <div class="product-detail-inner">
                                  <div class="detail-inner-left">
                                    <ul>
                                      <li class="pro-cart-icon"><a href="cart.html" title="Add To Cart"></a></li>
                                      <li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
                                      <li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
                                    </ul>
                                  </div>
                                  <div class="rating-summary-block right-side"></div>
                                </div>
                              </div>
                              <div class="product-item-details">
                                <div class="product-item-name"> <a href="product-page.html">Fastford Platinum Black</a> </div>
                                <div class="price-box"> <span class="price">$120.00</span> <del class="price old-price"></del> </div>
                              </div>
                            </div>
                          </div>-->
                          </div>
                      </li>
                      <li>

                        <div id="data-step2" class="items-step2 product-slider-main position-r" data-temp="tabdata" style="display:none">
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--  Our Products Block End  -->

      <!-- Latest News block End  -->


      <!-- CONTAINER END --> 
    </div>
  </div>