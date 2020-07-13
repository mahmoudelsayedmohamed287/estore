	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Profile page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">index</a>
					</nav>
				</div>
			</div>
		</div>
    </section>
    <br><br><br>
    <!-- End Banner Area -->
<div class="container">
 <div class="row justify-content-around align-items-center">
  <div class="col-4">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">My purchases</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Shipping addresses</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Favorites lists</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Account settings</a>
    </div>
  </div>

  <div class="col-4">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">My purchases

      <table class="table">
          <thead>
            <tr>
              <th scope="col">Order Number</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
      <?php foreach($settings['prusher'] as $order ) :?>
      <tr>
             <td><a href="<?php echo URL ?>product/Product/order/<?php echo $order->id?>"><?php echo  $order->order_number?></a></td>
             <td>On Shipping</td>
             </tr>
        <?php endforeach; ?>
         </tbody>
        </table>














      </div>
      <div class="tab-pane fade " id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <div class="row" style="background:aliceblue; padding:20px">
                <div class="section-top-border">
                    <div class="row title mb-20 pl-3">
                        <h5>Address </h5>
                    </div>
                    <div class="single-defination">
                        <ul class="single-defination">
                            <li><strong class="gutter">City : </strong><span id="ugender"><?php echo $settings['address']->city ?></span></li>
                            <li><strong class="gutter">Address 1 : </strong><span id="unationality"><?php echo $settings['address']->address_1?></span></li>
                            <li><strong class="gutter">Address 2 : </strong><span id="ubirthdate"><?php echo $settings['address']->address_2?></span></li>
                        </ul>                            
                    </div>
                    <button type="button" class="btn" data-toggle="modal" data-target="#address">
                       <i class="fa fa-edit"></i>
                </button>
                </div>
            </div>

      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
        
      
      Favorites lists

      <div id="whichListContent">



      </div>




      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"> 
            <div class="row" style="background:aliceblue; padding:20px">
                <div class="section-top-border">
                    <div class="row title mb-20 pl-3">
                        <h5>Account settings</h5>
                    </div>
                    <div class="single-defination">
                        <ul class="single-defination">
                               
                                <li><strong class="gutter">Name  : </strong><span id="fname"></span>  <?php echo $settings['user']->fname ?> <span id="lname"><?php echo $settings['user']->lname ?></span></li>
                                <li><strong class="gutter">Email :</strong><span id="customer_email"><?php echo $settings['user']->email ?> </span></li>
                                <li><strong class="gutter">Phone :</strong><span id="customer_email"><?php echo $settings['user']->phone ?> </span></li>
                                <li><strong class="gutter">Password:</strong><?php echo $settings['user']->password?></li>
                        </ul>

                </div>
                <button type="button" class="btn" data-toggle="modal" data-target="#pesronal">
                       <i class="fa fa-edit"></i>
                </button>
             </div>
          </div>
          <br>
                <div class="row" style="background:aliceblue; padding:20px">
                <div class="section-top-border">
                    <div class="row title mb-20 pl-3">
                        <h5>personal information</h5>
                    </div>
                    <div class="single-defination">
                        <ul class="single-defination">
                            <li><strong class="gutter">gender : </strong><span id="ugender"><?php echo $settings['user']->gender?></span></li>
                            <li><strong class="gutter">Nationality : </strong><span id="unationality"><?php echo $settings['user']->nationality?></span></li>
                            <li><strong class="gutter">Birth Day : </strong><span id="ubirthdate"><?php echo $settings['user']->birthday?></span></li>
                        </ul>                            
                    </div>
                    
                </div>
            </div>
    </div>
    </div>
  </div>
</div>

</div>
<br><br><br>





<!-- Button trigger modal -->

<div class="modal fade" id="pesronal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upadte Your Personal Informiation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="Profile/updateUserProfile" method="post" enctype="multipart/form-data">
            <div class="mt-10">
                <input type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'"
                    required class="single-input" value=" <?php echo $settings['user']->fname ?>" class="form-control" name="user_firstname">
            </div>
            <div class="mt-10">
                <input type="text"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'"
                    required class="single-input" value="<?php echo $settings['user']->lname ?>" id="datepicker" name="user_lastname" >
            </div>
            <div class="mt-10">
                <input type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"
                    required class="single-input"  value=" <?php echo $settings['user']->email ?>" name="user_email">
            </div>
            <div class="mt-10">
                <input type="number" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'"
                    required class="single-input"  value=" <?php echo $settings['user']->phone ?>" name="user_phone">
            </div>
            <div class="mt-10">
                <input type="text" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
                    required class="single-input"  value=" <?php echo $settings['user']->password ?>" name="user_password">
            </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_user" class="btn btn-primary">Save changes</button>
      </div>
     </form>
      </div>
    </div>
</div>
</div>


<div class="modal fade" id="address" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upadte Your Address Informiation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="Profile/updateUserAddress" method="post" enctype="multipart/form-data">
            <div class="mt-10">
                <input type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'"
                    required class="single-input" value="  <?php echo $settings['address']->city ?>" name="user_city">
            </div>
            <div class="mt-10">
                <input type="text"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address 1'"
                    required class="single-input" value=" <?php $settings['address']->address_1  ?>"  name="user_address_1" >
            </div>
            <div class="mt-10">
                <input type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address 2'"
                    required class="single-input"  value=" <?php echo $settings['address']->address_2 ?>" name="user_address_2">
            </div>
            <div class="mt-10">
                <input type="text" placeholder="Extra" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Extra'"
                    required class="single-input"  value=" <?php echo $settings['address']->extra ?>"  name="user_extra">
            </div>
            
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit_address" class="btn btn-primary">Save changes</button>
      </div>
     </form>
      </div>
    </div>
</div>
</div>









