	
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>review</h1>
					<nav class="d-flex align-items-center">
						<a href="">Home<span class="lnr lnr-arrow-right"></span></a>
						<a >Shop<span class="lnr lnr-arrow-right"></span></a>
						
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->


	
	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
		
		    
				<?php 
				if($avaliavleTowriteRate){?>
				   <form action="<?php echo URL . 'user/Profile/saveReview/' .$orderid ?>" method="POST">
				<label>Add Your Review</label>
				<input class="form-control" type="text" name="review_num">
				<label>Write Your Openioin</label>
				<textarea  name="review_text" ></textarea>
				<input type="submit" value="add review">
				
				</form>

				<?php
				
			}else {
				echo 'you add review before';
			}
				
				
				?>
		</div>
	</section>
	<!--================End Order Details Area =================-->