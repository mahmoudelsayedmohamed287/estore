<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title></title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?= URL ?>css/linearicons.css">
	<link rel="stylesheet" href="<?= URL ?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= URL ?>css/themify-icons.css">
	<link rel="stylesheet" href="<?= URL ?>css/bootstrap.css">
	<link rel="stylesheet" href="<?= URL ?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?= URL ?>css/nice-select.css">
	<link rel="stylesheet" href="<?= URL ?>css/nouislider.min.css">
	<link rel="stylesheet" href="<?= URL ?>css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?= URL ?>css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?= URL ?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?= URL ?>css/main.css">

	<!-- for testing -->

<?php 
$home = new sqlStatment();?>
<?php $meuns =  $home->all("menu") ?>
<?php $meuns_childerns =  $home->all("menu_children") ?>
<?php $footer = $home->all("setting")?>


	
</head>

<body>

<style>
.btn-primary{
	color: #fff;
    background-color: #FFAD01;
    border-color: #FFAD01;
}
.single-defination li {
	padding:3px 0;
}
.StripeElement {
    background-color: white;
    padding: 8px 12px;
    border-radius: 4px;
    border: 1px solid transparent;
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
}
.StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
    border-color: #fa755a;
}
.StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
}

.delete-whichlist{
	background: #6b5c5c;
}
.whichlistColor span {
	background-color: #000 !important;
}
.form-row{
    display: block;
  }

</style>
<div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 340px;"><header class="header_area sticky-header">

		<div class="main_menu">
	<!-- Start Header Area -->
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo URL ?>"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<!-- need to refactory -->
								
								<?php foreach($meuns as  $setting)  :   //active ?> 
									<li class="nav-item submenu dropdown"><!--  class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" -->
										<a href="<?php echo $setting->link ?>" class="nav-link dropdown-toggle" ><?= strtoupper($setting->title)?></a> 
										<ul class="dropdown-menu">
											<?php foreach($meuns_childerns as  $child)  :  ?> 
												<?php  if($child->menu_id === $setting->id) :?>
														<li class="nav-item"><a class="nav-link" href="<?= URL. $child->link ?>"><?= strtoupper($child->title)?></a></li>
												<?php endif;?>
											<?php endforeach; ?>
										</ul>
									</li>
								<?php endforeach; ?>
							
								 <?php if(isset($_SESSION['email'])) : ?>
									<li class="nav-item submenu dropdown">
										<a href="<?= $setting->link?>" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['name'] ?>
											<ul class="dropdown-menu">
												<li class="nav-item"><a class="nav-link" href="<?= URL.  'user/profile' ?>">Profile</a></li>
												<li class="nav-item"><a class="nav-link" href="<?= URL.  'user/LogOut' ?>">log Out</a></li>
											</ul>
										</a> 
									</li> 
										<?php if($_SESSION['role'] == 1 ) :?>
									     	<li class="nav-item"><a class="nav-link" href="<?= URL.  'admin/index' ?> ">Admin Panle</a></li>
										<?php endif;?>
								<?php else  :?>
								<li class="nav-item"><a class="nav-link" href="<?= URL.  'user/login' ?> ">login</a></li>
								<?php endif; ?> 
						  </ul>
						  <ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="<?php echo URL .'product/cart' ?>" class="cart"><span class="ti-bag bag-total"></span></a></li>
							<li class="nav-item">
							   <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						 </ul>
						</div>
				  </div>
		  </nav>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form  class="d-flex justify-content-between"  id="searchForm">
					<input id="s"  type="text" class="form-control"  placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header></div>
	<!-- End Header Area -->

	
 <?php echo $page ?>

    	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
					<?php foreach($footer as $foot):?>
						<h6>About Us</h6>
						<p>
							<?php echo $foot->abouts?>
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p><?php echo $foot->newsletter_email?></p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="<?= URL ?>img/i1.jpg" alt=""></li>
							<li><img src="<?= URL ?>img/i2.jpg" alt=""></li>
							<li><img src="<?= URL ?>img/i3.jpg" alt=""></li>
							<li><img src="<?= URL ?>img/i4.jpg" alt=""></li>
							<li><img src="<?= URL ?>img/i5.jpg" alt=""></li>
							<li><img src="<?= URL ?>img/i6.jpg" alt=""></li>
							<li><img src="<?= URL ?>img/i7.jpg" alt=""></li>
							<li><img src="<?= URL ?>img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="<?php echo $foot->facebook?>"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo $foot->twitter?>"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
							<?php endforeach;?>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="<?= URL ?>js/vendor/jquery-2.2.4.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="<?= URL ?>js/vendor/bootstrap.min.js"></script>
	<script src="<?= URL ?>js/jquery.ajaxchimp.min.js"></script>
	<script src="<?= URL ?>js/jquery.nice-select.min.js"></script>
	<script src="<?= URL ?>js/jquery.sticky.js"></script>
	<script src="<?= URL ?>js/nouislider.min.js"></script>
	<script src="<?= URL ?>js/countdown.js"></script>
	<script src="<?= URL ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= URL ?>js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

	<script src="<?= URL ?>js/gmaps.min.js"></script>
	<script src="<?= URL ?>js/main.js"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="<?= URL ?>js/cart.js"></script>
	<script src="<?= URL ?>js/whichlist.js"></script>
	<script src="<?= URL ?>js/charge.js"></script>
	<script src="<?= URL ?>js/karma.js"></script>


</body>

</html>

