<?php foreach($allWeeks as $week):?>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
									<div class="single-related-product d-flex">
										<a href="<?= URL . 'product/Product/'. $week->id?>"><img src="<?php echo $week->products_image?>" alt=""></a>
										<div class="desc">
											<a href="<?= URL . 'product/Product/'. $week->id?>" class="title"><?php echo $week->products_name?></a>
											<div class="price">
												<h6><?php echo $week->products_after?></h6>
												<h6 class="l-through"><?php echo $week->products_before?></h6>
											</div>
										</div>
									</div>
				</div>
				<?php endforeach;?>