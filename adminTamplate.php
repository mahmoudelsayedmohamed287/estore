<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Egypt</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?= URL?>assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?= URL?>assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= URL?>assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="<?= URL?>assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?= URL?>assets/css/default/style.min.css" rel="stylesheet" />
	<link href="<?= URL?>assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="<?= URL?>assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<!--
	<link href="assets/plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" media='print' />
	<link href="assets/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" />
-->
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	
 

  <style>
   body
   {
    margin:0;
    padding:0;
	background-color:#f1f1f1;
	height:3000px;
   }

   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
   .page-header-fixed #header
   {
	padding-bottom: 22px;
   }

   .nav i {
	   font-size:2em;
   }
   .table-responsive{
	   overflow-x: hidden;
   }

   .table-title h2
   {
	font-size: 30px;
	padding: 16px 0 0 0;
	}

	.table {
    border-color: #e2e7eb;
    border-radius: 3px;
    font-size: 14px;
	}

	.sidebar .nav>li>a {
    display: flex;
	align-items: baseline;
	}




	.sidebar .nav>li>a i {
    margin-right: 9px;
    width: 26px;
    text-align: center;
    font-size: 16px;
    padding: 8px 0;
	color:#FE6D00 !important
	}
   .site-wrapper > div.container, .site-wrapper #formAddAdderss {
	   width: calc(100% - 220px);
	   margin-left: 220px;
	   padding: 32px;
   }
  </style>
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"   href="admin/product/index">All products <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/brand/index">All brands</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/category/index">All categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/deals/index">All Deals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/week/index">All weeks</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/tags/index">All subCategories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/setting/index">All setting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/aboutus/index">All Aboutus</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/faq/index">All FAQS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/branches/index">All branches</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
<br>
<br>
<br> -->



<!-- my tamplate-->
<!-- begin #page-loader -->
<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="<?php echo URL?>" class="navbar-brand"><img src="<?php echo URL?>img/logo.png" alt="logo"></a>
				   <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
						<!-- end header navigation right -->
		</div>
		<!-- end #header -->
        


<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
                            <br>
							<div class="image">
								<img src="<?php echo URL?>/assets/img/user/user-13.png" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								
								
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
                            <li><a href="../logout.php"> Logout </a>
</li>
                            
                        </ul>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->

 					<ul class="nav">										
                    <li class="active"><a href="<?=  URL?>admin/product/index"><i class="fab fa-product-hunt"></i> <span>All Products</span></a></li>
					<li class="active"><a href="<?=  URL?>admin/brand/index"><i class="fab fa-bandcamp"></i><span>All Brands</span></a></li>
            		<li class="active"><a href="<?=  URL?>admin/category"><i class="fa fa-suitcase"></i> <span>All Categories</span></a></li>
               		<li class="active"><a href="<?=  URL?>admin/deals/index"><i class="fa fa-suitcase"></i> <span>All Deals</span></a></li>
               		<li class="active"><a href="<?= URL?>admin/week/index"><i class="far fa-calendar-alt"></i> <span>All Weeks</span></a></li>
                    <li class="active"><a href="<?php echo URL?>admin/tags/index"><i class="fab fa-schlix"></i> <span>All SubCategories</span></a></li>
                  	<li class="active"><a href="<?= URL?>admin/setting/index"><i class="fas fa-sliders-h"></i> <span>All Setting</span></a></li>
                 	<li class="active"><a href="<?= URL?>admin/aboutus/index"><i class="far fa-address-card"></i> <span>All About Us</span></a></li>
                	<li class="active"><a href="<?= URL?>admin/faq/index"><i class="fa fa-paint-brush"></i> <span>All FAQS</span></a></li>
                    <li class="active"><a href="<?= URL ?>admin/branches/index "><i class="fas fa-code-branch"></i> <span>All Branches</span></a></li>
                   	
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
        
        <!-- end page container -->

<!-- my tamplate-->

<div class="site-wrapper">
<?= $content ?>
</div>
	<script src="<?= URL?>assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->




 

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?= URL?>assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= URL?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= URL?>assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	
	<script src="<?= URL?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?= URL?>assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?= URL?>assets/js/theme/default.min.js"></script>
	<script src="<?= URL?>assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
    
     
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
  <script src="<?= URL?>js/admin/pace.min.js"></script>
<!-- <script src="<?= URL?>js/admin/jquery-2.2.4.min.js"></script>
<script src="<?= URL?>js/admin/bootstrap.min.js"></script>
<script src="<?= URL?>js/admin/jquery.slimscroll.min.js"></script>
<script src="<?= URL?>js/admin/js.cookie.js"></script>
<script src="<?= URL?>js/admin/default.min.js"></script> -->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
</body>





  
  
	<script>
		$(document).ready(function() {
			App.init();
//			Calendar.init();
		});
	</script>

<script>
  $(".add-line").on("click",function(){
    $("#cont").append(`<div class="row align-items-end" id="cont">
    <div class="col-md-3 mb-3">
      <input name="key[]"  type="text" class="form-control"  required="">
    </div>
    <div class="col-md-3 mb-3">
    <input name="value[]"  type="text" class="form-control"  required="">
    </div>

  </div>`)
  })
</script>

<script>
$(document).ready(function() {
  $('.summernote').summernote();
  
});
</script>

	<!-- <script>
		$(document).ready(function() {
			App.init();
//			Calendar.init();
	});
	</script> 
</html>