
	
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="">Home<span class="lnr lnr-arrow-right"></span></a>
						<a >Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Fashon Category</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	
	
	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-6">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">

						
							<li><a ><span>Order number</span> : <?php echo $order[0]->order_number?></a></li>
							<li><a ><span>Date</span> : <?php echo $order[0]->timestamp?> </a></li>
							<li><a ><span>Total</span> : USD <?php echo $order[0]->total?></a></li>
							<li><a ><span>Payment method</span> : cradit card </a></li>
						</ul>
					</div>
				</div>
			
				<div class="col-lg-6">
					<div class="details_item">
					<?php 
							 $user_info = json_decode($order[0]->cust_detailes);
		
							?>
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a ><span>Street</span> :   <?php echo $user_info->Address ?></a></li>
							<li><a ><span>City</span> :     <?php echo $user_info->State ?> </a></li>
							<li><a ><span>Country</span> :  <?php echo $user_info->Country ?></a></li>
							<li><a ><span>Postcode </span> :<?php echo $user_info->Zip_Code?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Product</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						
						
						
							 $detailes = json_decode($order[0]->order_detailes);
							 $product_names = explode(',',$detailes->product_name[0]);
							 $product_qnt = explode(',',$detailes->product_count[0]);
							 $product_price = explode(',',$detailes->product_price[0]);
							  for($i = 0; $i < count($product_names); $i++):
							?>

							<tr>
								<td>
									<?php 
								
									
									// die(print_R($product_names));
									
									echo $product_names[$i] ?></p>
								</td>
								<td>
									<h5><?php echo $product_qnt[$i]?></h5>
								</td>
								<td>
									<p>$ <?php echo $product_price[$i] * $product_qnt[$i] ?></p>
								</td>
							</tr>
						<?php endfor;?>
							
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$ <?php echo $order[0]->total?></p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Flat rate: $00.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
								<p>$ <?php echo $order[0]->total?></p>
								</td>
							</tr>
                     
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->
