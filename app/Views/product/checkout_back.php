
    <!--Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.html">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
<?php
if(isset($_SESSION["email"]))
{
   
?>
           
<!-- 
            <div class="cupon_area">
                <div class="check_title">
                    <h2>Have a coupon? <a href="#">Click here to enter your code</a></h2>
                </div>
                <input type="text" placeholder="Enter coupon code">
                <a class="tp_btn" href="#">Apply Coupon</a>
            </div> -->


            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form"  method="post"  novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name" value="<?php echo $userAddress->fname?>">
                                <span class="placeholder" data-placeholder="First name"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="name" value="<?php echo $userAddress->lname?>">
                                <span class="placeholder" data-placeholder="Last name"></span>
                            </div>
                            <!-- <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="company" name="company" placeholder="Company name" >
                            </div> -->
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number" value="<?php echo $userAddress->phone?>">
                                <span class="placeholder" data-placeholder="Phone number"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="compemailany" value="<?php echo $userAddress->email?>">
                                <span class="placeholder" data-placeholder="Email Address"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="<?php echo $userAddress->city ?>" selected><?php echo $userAddress->city ?></option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1" value="<?php echo $userAddress->address_1 ?>">
                                <span class="placeholder"  data-placeholder="Address line 01"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2" value="<?php echo $userAddress->address_2 ?>">
                                <span class="placeholder" data-placeholder="Address line 02"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city">
                                <span class="placeholder" data-placeholder="Town/City"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">District</option>
                                    <option value="2">District</option>
                                    <option value="4">District</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP">
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Shipping Details</h3>
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Ship to a different address?</label>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                            </div>
                        </form>
       
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Your Order</h2>
                            <ul class="list" id="productCheckOut">
                                <li><a href="#">Product <span>Total</span></a></li>
                                  <!-- GET DATA HERER FROM JS CODE -->
                            </ul>
                                  <!-- GET DATA FROM JS CODE -->
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Check payments</label>
                                    <div class="check"></div>
                                </div>
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.
                                </p>
                            </div>
                            <form action="<?php echo URL. '/product/Checkout/checkout'?>" method="post" id="payment-form">
                                <div class="form-row">
                                <label for="card-element">Credit or debit card</label>
                                <div id="card-element">
                                     <!-- a Stripe Element will be inserted here. -->
                                </div>

                                
                                <input type="hidden" value="<?php echo $userAddress->email?>" name="email">
                                <input type="hidden" value="<?php echo $userAddress->fname?>" name="fname">
                                <input type="hidden" value="<?php echo $userAddress->lname?>" name="lname">
                                <input type="hidden" value="<?php echo $userAddress->phone?>" name="phone">
                                <input type="hidden" value="<?php echo $userAddress->address_1?>" name="address">
                                <input type="hidden" value="<?php echo $userAddress->city?>" name="country">
                                <input type="hidden" id="checkouttotal" name="checkouttotal">
                                <div id="orderdeatails">
                                
                                </div>
                                <input type="hidden" id="productIds" name="id[]">
                                <input type="hidden" id="productPrices" name="productPrices[]">
                                <input type="hidden" id="productQnty" name="productQnty[]">
                                <input type="hidden" id="productName" name="productName[]">
                                
                                <!-- Used to display form errors -->
                                <div id="card-errors"></div>
                                </div>
                                <button id="pay">Submit Payment</button>
                            </form>
                            <!-- <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Paypal </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                    account.</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                            <a class="primary-btn" href="#">Proceed to Paypal</a>
                        </div> -->
                        
                    </div>
                </div>
            </div>
            <?php  }else {?>
                 <div class="returning_customer">


                 <div class="check_title">
                     <h2>Please Lgoed in before <a href="<?php echo URL ?>user/login">Click here to login</a></h2>
                 </div>
                 or you can sign up
                           <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Create an account?</label>
                                </div>
                            </div>
                 <!-- <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
                     customer, please proceed to the Billing & Shipping section.</p>
                 <form class="row contact_form" action="<?= URL . 'user/Login/login_user' ?>" method="post" novalidate="novalidate">
                     <div class="col-md-6 form-group p_star">
                         <input type="text" class="form-control" id="name" value="<?php if(isset($user->email ) ) echo $user->email ?>" 
                         name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                         <span class="placeholder" data-placeholder="Username or Email"></span>
                     </div>
                     <div class="col-md-6 form-group p_star">
                         <input type="password" class="form-control" id="password" name="password">
                         <span class="placeholder" data-placeholder="Password"></span>
                     </div>
                     <div class="col-md-12 form-group">
                         <button type="submit" value="submit" class="primary-btn">login</button>
                         <div class="creat_account">
                             <input type="checkbox" id="f-option" name="selector"
                             <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>
                             <label for="f-option">Remember me</label>
                         </div>
                         <a class="lost_pass" href="<?php echo URL ?>user/login/forget">Lost your password?</a>
                     </div>
                 </form> -->
             </div>
           <?php }
        ?>


        </div>
    </section>
    <!--================End Checkout Area =================-->

    <!-- start footer Area-->

   
