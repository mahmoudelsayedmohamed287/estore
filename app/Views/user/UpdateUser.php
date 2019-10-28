	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Upadet profile</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">index</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
<div id="wrapper">
 <div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
     <div class="row">
        <div class="col-lg-12">
           <h1 class="page-header">
                Welcome to .....
                <small>A</small>
            </h1>
     <form action="Profile/updateUserProfile" method="post" enctype="multipart/form-data">    
            <div class="form-group">
                <label for="">Firstname</label>
                <input type="text" value="" class="form-control" name="user_firstname">
            </div>
            <div class="form-group">
                <label for="">Lastname</label>
                <input type="text" value="" class="form-control" name="user_lastname">
            </div>
            <div class="form-group">
                <label for="post_content">Phone</label>
                <input type="phone" value="" class="form-control" name="user_email">
            </div>
            <div class="form-group">
                <label for="">City</label>
                <input type="text" value="" class="form-control" name="user_city">
            </div>
            <div class="form-group">
                <label for="">Address 1</label>
                <input type="text" value="" class="form-control" name="user_address_1">
            </div>
            <div class="form-group">
                <label for="">Address 2</label>
                <input type="text" value="" class="form-control" name="user_address_2">
            </div>
            <div class="form-group">
                <label for="">Extra</label>
                <input type="text" value="" class="form-control" name="user_extra">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">
            </div>
     </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


