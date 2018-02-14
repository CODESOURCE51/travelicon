		<?php include('head.php');?>
        	<div class="page_top_wrap page_top_title page_top_breadcrumbs">
				<div class="breadcrumbs">
					<div class="content_wrap">
						<a class="breadcrumbs_item home" href="<?php echo base_url();?>">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Weekend Leisures</span>
					</div>
				</div>
				<div class="page_title_wrap content_wrap page_title_wrap_style_2">
					<span class="page_title_bg"></span>
					<h1 class="page_title">Weekend Leisures</h1>
				</div>
			</div>

			<div class="page_content_wrap container">
				<div class="content">

					<section class="">
						<div class="">

							<div class="isotope_filters">
								<a class="filter" data-filter=".sea-side">SEA SIDE</a>
								<a class="filter" data-filter=".jungle">JUNGLE</a>
								<a class="filter" data-filter=".himalayan-range">HIMALAYAN RANGE</a>
								<a class="filter" data-filter=".landscape">LANDSCAPE</a>
							</div>

							<ul id="products-cont" class="products">
                            <?php $t=0; foreach($seeSub as $seeside){?>
                            <?php 
							//echo "SELECT * FROM td_multiimage WHERE serv_id=".$seeside['service_id']." ORDER BY mid ASC LIMIT 1";
							$mimages = $this->db->query("SELECT * FROM td_multiimage WHERE serv_id=".$seeside['service_id']." ORDER BY mid ASC LIMIT 1")->result_array();
							$service = $this->db->query("SELECT * FROM td_service WHERE service_id=".$seeside['dest'])->result_array();
							//echo "SELECT * FROM td_service WHERE service_id=".$seeside['dest'];
							
							?>
								<li class="mix sea-side product column-1_3">
									<a href="#"></a>
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<a class="" href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $seeside['service_id'];?>" style="max-height:233px; overflow:hidden;">
													<span class="link_wrap">
														<span class="hover_link icon-right-open">View Details</span>
													</span>
													<img src="<?php echo base_url();?>uploads/<?php if(empty($mimages[0]['img']))echo 'no_image_thumb.gif'; else echo $mimages[0]['img'];?>" class="attachment-shop_catalog wp-post-image" alt="Typical canal in the center of Amsterdam" />
												</a>
											</div>
										</div>
										<div class="post_content">
											<h3>
											<a href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $seeside['service_id'];?>" style="display:block; min-height:81px;"><?php echo $seeside['service_name'];?></a>
											</h3>
											<!--<div class="product_cats">
												<a href="#"><?php echo $service[0]['note'];?></a>
											</div>-->
											<!--<div class="product_price">from
												<span class="price">
													<span class="amount">&#8377;<?php echo $see[0]['samount'];?></span>
												</span>
												/night
											</div>-->
										</div>
									</div>
								</li>
                                <?php $t++;} ?>
                                 <?php foreach($jungleSub as $jungleside){?>
                            <?php 
							$mimage = $this->db->query("SELECT * FROM td_multiimage WHERE serv_id=".$jungleside['service_id']." ORDER BY mid ASC LIMIT 1")->result_array();
							$service = $this->db->query("SELECT * FROM td_service WHERE service_id=".$jungleside['dest'])->result_array();
							?>
								<li class="mix jungle product column-1_3">
									<a href="#"></a>
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<a class="" href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $jungleside['service_id'];?>" style="max-height:233px; overflow:hidden;">
													<span class="link_wrap">
														<span class="hover_link icon-right-open">View Details</span>
													</span>
													<img src="<?php echo base_url();?>uploads/<?php if(empty($mimage[0]['img']))echo 'no_image_thumb.gif'; else echo $mimage[0]['img'];?>" class="attachment-shop_catalog wp-post-image" alt="Typical canal in the center of Amsterdam" />
												</a>
											</div>
										</div>
										<div class="post_content">
											<h3>
												<a href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $jungleside['service_id'];?>" style="display:block; min-height:81px;"><?php echo $jungleside['service_name'];?></a>
											</h3>
											<div class="product_cats">
												<a href="#"><?php echo $service[0]['note'];?></a>
											</div>
											<!--<div class="product_price">from
												<span class="price">
													<span class="amount">&#8377;<?php echo $jungle[0]['samount'];?></span>
												</span>
												/night
											</div>-->
										</div>
									</div>
								</li>
                                <?php } ?>
                                <?php foreach($himalayaSub as $himalayaside){?>
                            <?php 
							$mimage = $this->db->query("SELECT * FROM td_multiimage WHERE serv_id=".$himalayaside['service_id']." ORDER BY mid ASC LIMIT 1")->result_array();
							$service = $this->db->query("SELECT * FROM td_service WHERE service_id=".$himalayaside['dest'])->result_array();
							?>
								<li class="mix himalayan-range product column-1_3">
									<a href="#"></a>
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<a class="" href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $himalayaside['service_id'];?>" style="max-height:233px; overflow:hidden;">
													<span class="link_wrap">
														<span class="hover_link icon-right-open">View Details</span>
													</span>
													<img src="<?php echo base_url();?>uploads/<?php if(empty($mimage[0]['img']))echo 'no_image_thumb.gif'; else echo $mimage[0]['img'];?>" class="attachment-shop_catalog wp-post-image" alt="Typical canal in the center of Amsterdam" />
												</a>
											</div>
										</div>
										<div class="post_content">
											<h3>
												<a href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $himalayaside['service_id'];?>" style="display:block; min-height:81px;"><?php echo $himalayaside['service_name'];?></a>
											</h3>
											<div class="product_cats">
												<a href="#"><?php echo $service[0]['note'];?></a>
											</div>
											<!--<div class="product_price">from
												<span class="price">
													<span class="amount">&#8377;<?php echo $himalaya[0]['samount'];?></span>
												</span>
												/night
											</div>-->
										</div>
									</div>
								</li>
                                <?php } ?>
                                <?php foreach($landscapeSub as $landscapeside){?>
                            <?php 
							$mimage = $this->db->query("SELECT * FROM td_multiimage WHERE serv_id=".$landscapeside['service_id']." ORDER BY mid ASC LIMIT 1")->result_array();
							$service = $this->db->query("SELECT * FROM td_service WHERE service_id=".$landscapeside['dest'])->result_array();
							?>
								<li class="mix landscape product column-1_3">
									<a href="#"></a>
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<a class="" href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $landscapeside['service_id'];?>" style="max-height:233px; overflow:hidden;">
													<span class="link_wrap">
														<span class="hover_link icon-right-open">View Details</span>
													</span>
													<img src="<?php echo base_url();?>uploads/<?php if(empty($mimage[0]['img']))echo 'no_image_thumb.gif'; else echo $mimage[0]['img'];?>" class="attachment-shop_catalog wp-post-image" alt="Typical canal in the center of Amsterdam" />
												</a>
											</div>
										</div>
										<div class="post_content">
											<h3>
												<a href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $landscapeside['service_id'];?>" style="display:block; min-height:81px;"><?php echo $landscapeside['service_name'];?></a>
											</h3>
											<div class="product_cats">
												<a href="#"><?php echo $service[0]['note'];?></a>
											</div>
											<!--<div class="product_price">from
												<span class="price">
													<span class="amount">&#8377;<?php echo $landscape[0]['samount'];?></span>
												</span>
												/night
											</div>-->
										</div>
									</div>
								</li>
                                <?php } ?>
							</ul>

							<nav class="pagination_wrap pagination_pages pager-list">

							</nav>

						</div>
					</section>

				</div>
			</div>

		<?php include('footer.php');?>


	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/vendor/jquery-1.11.3.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/vendor/jquery-migrate.min.js'></script>

	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/vendor/__packed.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/jquery.mixitup.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/jquery.mixitup.pagination.min.js'></script>

	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/core.utils.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/core.init.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/shortcodes.min.js'></script>

	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/_main.js'></script>
	<script>
		$('#products-cont').mixItUp({
			load: {
				filter: '.sea-side'
			},
			pagination: {
				limit: 12,
				generatePagers: true,
				maxPagers: 5
			}
		});
	</script>


</body>
</html>