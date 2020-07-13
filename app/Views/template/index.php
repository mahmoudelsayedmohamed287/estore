
    
	
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
   
  </style>
 
</head>
<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><img src="assets/img/logo/logo.png" alt="logo"></a>
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
							<div class="image">
								<img src="../assets/img/user/user-13.png" alt="" />
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
                    <li class="active"><a href="../After_header/index.php"><i class="fab fa-product-hunt"></i> <span>All Products</span></a></li>
					<li class="active"><a href="C:\xampp\htdocs\estore\app\Views\admin\brands\allbrands.php"><i class="fab fa-bandcamp"></i><span>All Brands</span></a></li>
            		<li class="active"><a href="../modal_contain/index.php"><i class="fa fa-suitcase"></i> <span>All Categories</span></a></li>
               		<li class="active"><a href="../best_sell/index.php"><i class="fa fa-suitcase"></i> <span>All Deals</span></a></li>
               		<li class="active"><a href="../how to use/index.php"><i class="far fa-calendar-alt"></i> <span>All Weeks</span></a></li>
                    <li class="active"><a href="../dayguarntee/index.php"><i class="fab fa-schlix"></i> <span>All SubCategories</span></a></li>
                  	<li class="active"><a href="../gallary/index.php"><i class="fas fa-sliders-h"></i> <span>All Setting</span></a></li>
                 	<li class="active"><a href="../reviews/index.php"><i class="far fa-address-card"></i> <span>All About Us</span></a></li>
                	<li class="active"><a href="../quetions/index.php"><i class="fa fa-paint-brush"></i> <span>All FAQS</span></a></li>
                    <li class="active"><a href="../steps-title/index.php"><i class="fas fa-code-branch"></i> <span>All Branches</span></a></li>
					<li class="active"><a href="<?=  URL?>admin/branches/index"><i class="fas fa-code-branch"></i> <span>All Branches</span></a></li>
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
	
	

