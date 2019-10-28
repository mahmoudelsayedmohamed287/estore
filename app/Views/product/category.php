
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Fashon Category</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

<?php	$home = new sqlStatment();

$home->_printMessage();

?>
<?php  if(isset($_POST['msg'])) {?>
	<div class="alert alert-success" role="alert"></div>
<?php } ?>

<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
						<?php foreach($home->retriveCatagoey() as $category) : ?>
						
								<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
										class="lnr lnr-arrow-right"></span><?= $category->title ?><span class="number">(53)</span></a>
									<ul class="collapse show" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
										<?php foreach($home->retriveTags() as $tag ) :?>
											<?php if($tag->category_id === $category->id): ?>
											   <li class="main-nav-list child"><a href="<?= URL. '/product/Catagory/getProductTage/'. $tag->id?>"><?= $tag->title ?><span class="number">(13)</span></a></li>
											   <div class="list-group">
													<div class="list-group-item checkbox">
														<label><input type="checkbox" class="common_selector tag" value="<?php echo  $tag->id  ?>" > <?php echo  $tag->title?> </label>
													</div>
												</div>
											<?php endif;?>
                                        <?php endforeach; ?>
									</ul>
								</li>
					   <?php endforeach;?>
                   </ul>
			   </div>
			   <div class="sidebar-filter mt-50">
					<div class="top-filter-head">Product Filters</div>
					<div class="common-filter">
						<div class="head">Brands</div>
						<form action="#">
							<ul>
								<?php foreach($home->retriveBrands() as $brand) : ?>
								  <!-- <li class="filter-list">
									  <a href="<?= URL. '/product/Catagory/getProductbrand/'. $brand->id?>" >
									     <input  class="pixel-radio" type="radio" id="apple" name="brand"><label for="<?= $brand->title ?>"><?= $brand->title ?><span>(29)</span></label>
                                      </a>
								  </li> --> 
								  <div class="list-group">
										<div class="list-group-item checkbox">
										<label><input type="checkbox" class="common_selector brand" value="<?php echo  $brand->title  ?>" > <?php echo  $brand->title ?> </label>
										</div>
								  </div>
                                <?php endforeach; ?>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Color</div>
				  <div class="list-group">
						<div class="list-group-item checkbox">
                          <label><input type="checkbox" class="common_selector ram" value="<?php echo 'coloe' ?>" > <?php echo 'color'?> </label>
                        </div>
                  </div>
							
						
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
			  
			   <section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
					 <?php foreach($settings['products'] as $product) : ?>
					  
					
						<div class="col-lg-4 col-md-6">
							<div class="single-product searchResult">
							  <form id="frmCart">
								<img class="img-fluid" id="product_image" src="<?= URL .'/img/product/'.$product->image?>" alt="">
								<div class="product-details">
									<h6><?= $product->title ?></h6>
									<div class="price">
										<h6>$<?= $product->price_before ?> </h6>
										<h6 class="l-through">$<?= $product->price_after ?></h6>
										<input type="hidden" id="quantity"  value="1">
										
									</div>
									<div class="prd-bottom">
									       <?php
												
											?>
										<a class="social-info addItemTocart" 
										data-id="<?= $product->id?>" 
										data-name="<?= $product->title?>"
										data-price="<?= $product->price_before ?>"
										data-image="<?= URL .'/img/product/'.$product->image?>">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
											
										</a>
									
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="<?= URL . 'product/Product/'. $product->id?>" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
									</form>
								</div>
							</div>
						</div>
                 <?php endforeach;?>
                    </div>
			   </section>
			 
</div>
</div>
</div>

