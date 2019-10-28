
<?php
//include "app/Models/user/LoginModel.php" ;

if(isset($_SESSION["email"]))
{
	header("Location:" . URL );
}
$model = new LoginModel();
 
  if(isset($_COOKIE["member_login"])) { 
	$user = $model->getUser($_COOKIE["member_login"]);
	
	
      } 
 

?>
<?php 
if(isset($error)){?>
<div class="alert alert-dangerr">
	password or email no correct
</div>
<?php }?>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<?php if(isset($settings['error'])) {?>
<?php foreach($settings['error'] as $error):?>
	<div class="alert alert-danger" role="alert">
    <?= $error ?>
	</div>
	<?php endforeach; ?>
<?php }?>
	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= URL . 'img/login.jpg'?>" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="<?= URL . 'user/Register' ?>">Create an Account</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="<?= URL . 'user/Login/login_user' ?>" method="POST" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" 
								value="<?php if(isset($user->email ) ) echo $user->email ?>" id="name" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" value="<?php if(isset($user->password) ) echo   $user->password  ?>" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="remember" 
									<?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="login/forget">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	
