	<?php include('head.php');?>
    <div class="page_top_wrap page_top_title page_top_breadcrumbs">
				<div class="breadcrumbs">
					<div class="content_wrap">
						<a class="breadcrumbs_item home" href="<?php echo base_url();?>">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">DESTINATION NAME</span>
					</div>
				</div>
				<div class="page_title_wrap content_wrap page_title_wrap_style_2">
					<span class="page_title_bg"></span>
					<h1 class="page_title"><?php echo $destination[0]['service_name'];?></h1>
				</div>
			</div>

			<div class="page_content_wrap container">
				<div class="content">

					<section class="">
						<div class="">

							<div class="product has-post-thumbnail">

								<!--<span class="onsale">Sale!</span>-->
								<div class="images">
									<!--FEATURED IMAGE-->
									<img src="<?php echo base_url();?>uploads/<?php echo $destination[0]['uplds'];?>" class="attachment-shop_single" alt="Vacations-And-Tourism-Concept" title="Vacations-And-Tourism-Concept" />
								</div>

								<div class="summary entry-summary">
									<h1 class="product_title entry-title">ABOUT <?php echo $destination[0]['service_name'];?></h1>
									<p style="text-align: justify"><?php echo $destination[0]['lnote'];?></p>
								</div>

							</div>

						</div>
					</section>
					<section style="padding-bottom: 30px">
						<div class="">
							<h2 class="sc_align_center">HOTELS</h2>
						</div>
					</section>
					<section class="">
						<div class="">

							<ul id="products-cont" class="products">
                            <?php foreach($hotels as $hotls){
								
								$mimage = $this->db->query("SELECT * FROM td_multiimage WHERE serv_id=".$hotls['service_id']." ORDER BY mid ASC LIMIT 1")->result_array();
								$service = $this->db->query("SELECT * FROM td_service WHERE service_id=".$hotls['dest'])->result_array();
								?>
								<li class="mix sea-side product column-1_3">
									<a href="#"></a>
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<a class="" href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $hotls['service_id'];?>" style="max-height:233px; overflow:hidden;">
													<span class="link_wrap">
														<span class="hover_link icon-right-open">View Details</span>
													</span>
													<img src="<?php echo base_url();?>uploads/<?php if(empty($mimage[0]['img']))echo 'no_image_thumb.gif'; else echo $mimage[0]['img'];?>" class="attachment-shop_catalog wp-post-image" alt="Typical canal in the center of Amsterdam" />
												</a>
											</div>
										</div>
										<div class="post_content">
											<h3>
											<a href="<?php echo base_url();?>index.php/Page/HotelDetails/<?php echo $hotls['service_id'];?>" style="display:block; min-height:81px;"><?php echo $hotls['service_name'];?></a>
											</h3>
											<!--<div class="product_cats">
												<a href="#"><?php echo $mimage[0]['img'];?></a>
											</div>
											<div class="product_price">from
												<span class="price">
													<span class="amount">&#8377;125.69</span>
												</span>
												/night
											</div>-->
										</div>
									</div>
								</li>
                                <?php } ?>
								<!--<li class="mix jungle product column-1_3">
									<a href="#"></a>
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<a class="" href="#">
													<span class="link_wrap">
														<span class="hover_link icon-right-open">View Details</span>
													</span>
													<img src="<?php echo base_url();?>assets/site/images/Amsterdam-564x370.jpg" class="attachment-shop_catalog wp-post-image" alt="Typical canal in the center of Amsterdam" />
												</a>
											</div>
										</div>
										<div class="post_content">
											<h3>
												<a href="#">Jungle Item</a>
											</h3>
											<div class="product_cats">
												<a href="#">Amsterdam, The Netherlands</a>
											</div>
											<div class="product_price">from
												<span class="price">
													<span class="amount">&#8377;125.69</span>
												</span>
												/night
											</div>
										</div>
									</div>
								</li>
								<li class="mix himalayan-range product column-1_3">
									<a href="#"></a>
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<a class="" href="#">
													<span class="link_wrap">
														<span class="hover_link icon-right-open">View Details</span>
													</span>
													<img src="<?php echo base_url();?>assets/site/images/Amsterdam-564x370.jpg" class="attachment-shop_catalog wp-post-image" alt="Typical canal in the center of Amsterdam" />
												</a>
											</div>
										</div>
										<div class="post_content">
											<h3>
												<a href="#">Himalayan Range Item</a>
											</h3>
											<div class="product_cats">
												<a href="#">Amsterdam, The Netherlands</a>
											</div>
											<div class="product_price">from
												<span class="price">
													<span class="amount">&#8377;125.69</span>
												</span>
												/night
											</div>
										</div>
									</div>
								</li>
								<li class="mix landscape product column-1_3">
									<a href="#"></a>
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<a class="" href="#">
													<span class="link_wrap">
														<span class="hover_link icon-right-open">View Details</span>
													</span>
													<img src="<?php echo base_url();?>assets/site/images/Amsterdam-564x370.jpg" class="attachment-shop_catalog wp-post-image" alt="Typical canal in the center of Amsterdam" />
												</a>
											</div>
										</div>
										<div class="post_content">
											<h3>
												<a href="#">Landscape Item</a>
											</h3>
											<div class="product_cats">
												<a href="#">Amsterdam, The Netherlands</a>
											</div>
											<div class="product_price">from
												<span class="price">
													<span class="amount">&#8377;125.69</span>
												</span>
												/night
											</div>
										</div>
									</div>
								</li>-->
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