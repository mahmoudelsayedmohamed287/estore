

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a> 
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->
  
    <!--================Cart Area =================-->
    <section class="cart_area" id="cart-item">
    <button type="button" class="clear-cart">Clear</button>
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table cart">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody id="cartContentt">
                     
                          
             
                        </tbody>
                    </table>
                    <a class="primary-btn" id="checkout" href="<?php echo URL . 'product/Checkout'?>">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </section>

    <!--================End Cart Area =================-->

 