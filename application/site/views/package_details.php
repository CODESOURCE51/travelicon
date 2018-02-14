<?php include('head.php');?>
<div class="page_top_wrap page_top_title page_top_breadcrumbs">
				<div class="breadcrumbs">
					<div class="content_wrap">
						<a class="breadcrumbs_item home" href="<?php echo base_url();?>">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Details</span>
					</div>
				</div>
				<div class="page_title_wrap content_wrap page_title_wrap_style_2">
					<span class="page_title_bg"></span>
					<h1 class="page_title"><?php echo $package[0]['name'];?></h1>
				</div>
			</div>

			<div class="page_content_wrap container">
				<div class="content">
					<article class="post_item post_item_single post_item_product">
							
							<section class="">
								<div class="">

									<div class="product">
										<div class="columns_wrap sc_columns sc_columns_count_2">
                                        <?php foreach($packageDtl as $pkgdtl) { 
										$ofrs = explode(',',$pkgdtl['offer']);
										$cnt = count($ofrs)-1;
										?>
											<div class="column-1_2">
												<h1 class="product_title entry-title"><?php echo $pkgdtl['package'];?></h1>
												<div class="sc_table aligncenter">
													<table>
														<tbody>
														<tr>
															<th>Room Sharing</th>
															<th>Non-AC</th>
															<th>AC</th>
														</tr>
                                                         <?php for($i=0;$i<=$cnt;$i++){
														$exp = explode('-',$ofrs[$i]);
														?>
														<tr>
															<td><?php echo $exp[0];?></td>
															<td><?php echo $exp[1];?></td>
														<td><?php echo $exp[2];?></td>
														</tr>
                                                        <?php } ?>
														</tbody>
													</table>
												</div>
												<strong>Service Tax</strong> : 15% extra
											</div>
                                            <?php } ?>
											
											
										</div>


									</div>

								</div>
							</section>

					</article>
				</div>
			</div>

		<?php include('footer.php');?>


	<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/vendor/jquery-1.11.3.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/vendor/jquery-migrate.min.js'></script>

	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/vendor/__packed.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/vendor/woo/jquery.prettyPhoto.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/vendor/woo/jquery.prettyPhoto.init.min.js'></script>

	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/core.utils.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/core.init.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/shortcodes.min.js'></script>

	<script type='text/javascript' src='<?php echo base_url();?>assets/site/js/custom/_main.js'></script>


</body>
</html>