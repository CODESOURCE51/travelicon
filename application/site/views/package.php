<?php include('head.php');?>
<div class="page_top_wrap page_top_title page_top_breadcrumbs">
				<div class="breadcrumbs">
					<div class="content_wrap">
						<a class="breadcrumbs_item home" href="<?php echo base_url();?>">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Customized Packages</span>
					</div>
				</div>
				<div class="page_title_wrap content_wrap page_title_wrap_style_2">
					<span class="page_title_bg"></span>
					<h1 class="page_title">Customized Packages</h1>
				</div>
			</div>

			<div class="page_content_wrap container">
				<div class="content">

					<section class="">
						<div class="">

							<ul id="products-cont" class="products">
                            <?php foreach($package as $plist) { ?>
								<li class="mix product column-1_3">
									<a href="<?php echo base_url();?>index.php/Page/PackageDetails/<?php echo $plist['pack_id'];?>"></a>
									<div class="post_item_wrap">
										<div class="post_featured">
											<div class="post_thumb">
												<a class="" href="<?php echo base_url();?>index.php/Page/PackageDetails/<?php echo $plist['pack_id'];?>">
													<span class="link_wrap">
														<span class="hover_link icon-right-open">View Details</span>
													</span>
													<img src="<?php echo base_url();?>uploads/<?php echo $plist['uplds'];?>" class="attachment-shop_catalog wp-post-image" alt="Typical canal in the center of Amsterdam" />
												</a>
											</div>
										</div>
										<div class="post_content">
											<h3>
											<a href="<?php echo base_url();?>index.php/Page/PackageDetails/<?php echo $plist['pack_id'];?>"><?php echo $plist['name'];?></a>
											</h3>
											<div class="product_cats">
												<a href="<?php echo base_url();?>index.php/Page/PackageDetails/<?php echo $plist['pack_id'];?>"><?php echo $plist['sdescr'];?></a>
											</div>
											<div class="product_price">from
												<span class="price">
													<span class="amount">&#8377;<?php echo $plist['samount'];?></span>
												</span>
												/night
											</div>
										</div>
									</div>
								</li>
								<?php } ?>
								
								
							</ul>

							<nav class="pagination_wrap pagination_pages pager-list">

							</nav>.

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
			pagination: {
				limit: 12,
				generatePagers: true,
				maxPagers: 5
			}
		});
	</script>


</body>
</html>