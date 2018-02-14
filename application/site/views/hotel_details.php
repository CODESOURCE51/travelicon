		<?php include('head.php');?>
        <div class="page_top_wrap page_top_title page_top_breadcrumbs">
				<div class="breadcrumbs">
					<div class="content_wrap">
						<a class="breadcrumbs_item home" href="<?php echo base_url();?>">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Details</span>
					</div>
				</div>
				<div class="page_title_wrap content_wrap page_title_wrap_style_2">
					<span class="page_title_bg"></span>
					<h1 class="page_title">Hotel & Resort Details</h1>
				</div>
			</div>

			<div class="page_content_wrap container">
				<div class="content">
					<article class="post_item post_item_single post_item_product">
							
							<section class="">
								<div class="">

									<nav class="woocommerce-breadcrumb">
										<a href="#">Home</a>&nbsp;&#47;&nbsp;
										<a href="#">Male, Maldives</a>&nbsp;&#47;&nbsp;<?php echo $hotels[0]['service_name'];?>
									</nav>
<?php $mimage = $this->db->query("SELECT * FROM td_multiimage WHERE serv_id=".$hotels[0]['service_id']." ORDER BY mid ASC LIMIT 1")->result_array();?>
									<div class="product has-post-thumbnail">

										<!--<span class="onsale">Sale!</span>-->
										<div class="images">
											<!--FEATURED IMAGE-->
											<img src="<?php echo base_url();?>uploads/<?php if(empty($mimage[0]['img']))echo 'no_image_thumb.gif'; else echo $mimage[0]['img'];?>" class="attachment-shop_single" alt="Vacations-And-Tourism-Concept" title="Vacations-And-Tourism-Concept" />
										</div>

										<div class="summary entry-summary">
											<h1 class="product_title entry-title"><?php echo $hotels[0]['service_name'];?></h1>
                                            <?php 
											$ofrs = explode(',',$hotels[0]['note']);
											$cnt = count($ofrs)-1;
											?>
											<div class="sc_table aligncenter">
												<table>
													<tbody>
													<tr>
														<th>#</th>
														<th>Room</th>
														<th>Tariff</th>
													</tr>
                                                    <?php for($i=0;$i<=$cnt;$i++){
														$exp = explode('-',$ofrs[$i]);
														?>
													<tr>
														<td><?php echo $i+1;?></td>
														<td><?php echo $exp[0];?></td>
														<td><?php echo $exp[1];?></td>
													</tr>
                                                    <?php } ?>
													</tbody>
												</table>
											</div>
											<strong>Service Tax</strong> : 15% extra
										</div>

									</div>

								</div>
							</section>
							<section class="">
								<div class="">
									<div class="isotope_wrap portfolio " data-columns="4">
									<?php foreach($multiimage as $mimages) { ?>
										<div class="isotope_item isotope_item_grid isotope_item_grid_4 isotope_column_4 flt_138 flt_32">
											<article class="post_item post_item_grid post_item_grid_4 post_format_standard odd">
												<div class="post_content isotope_item_content">
													<div class="post_featured img">
														<img alt="Travel in the Middle East in 2015" src="<?php echo base_url();?>uploads/<?php echo $mimages['img'];?>">
														<div class="hover_wrap">
															<div class="hover_content">
																<a class="hover" href="<?php echo base_url();?>uploads/<?php echo $mimages['img'];?>">
																</a>
															</div>
														</div>
													</div>
												</div>
											</article>
										</div>
                                        <?php } ?>


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