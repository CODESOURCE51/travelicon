<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Update Hotel Details</h1>
                
            </div>
        </div>
        <!-- END Page Title -->

        <!-- BEGIN Breadcrumb -->
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li class="active"><i class="fa fa-home"></i> Home</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-bars"></i> Hotel Details Update Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" id="upload" action="<?php echo base_url();?>admin.php/Update/HotelDetails" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_service();">
                        <input type="hidden" name="cid" value="<?php echo $data[0]['service_id'];?>" />

                        
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Title Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_service" id="txt_service" value="<?php echo $data[0]['service_name'];?>" />
                                </div>
                            </div>
                           
                           
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Offers</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control show-popover" rows="3" data-trigger="hover"
                                           data-content="Enter Your Notes"
                                           data-original-title="Optional" data-placement="top" name="txt_notes"><?php echo $data[0]['note'];?></textarea>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Destination</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                  <select class="form-control" name="txt_destiny" id="txt_destiny" data-rule-required="true">
                                  <option value="">-- Please select --</option>
                                 <?php foreach ($destination as $destiny): ?>
                                 <option value="<?php echo $destiny['service_id'];?>" <?php if($destiny['service_id'] == $data[0]['dest']){?>selected<?php } ?>> <?php echo $destiny['service_name'];?></option>
                                 <?php endforeach; ?>  
                                 </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Weekend Leisures</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                  <select class="form-control" name="txt_leisures" id="txt_leisures" data-rule-required="true">
                                  <option value="">-- Please select --</option>
                                 <?php foreach ($weekend as $wend): ?>
                                 <option value="<?php echo $wend['book_id'];?>" <?php if($wend['book_id'] == $data[0]['wkl']){?>selected<?php } ?>><?php echo $wend['name'];?></option>
                                 <?php endforeach; ?>  
                                 </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button name="submit" type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>admin.php/view/HotelDetails" class="btn">View Hotel Details</a>
                                </div>
                            </div>
                                <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                            <div id="drop">
				Drop Here

				<a>Browse</a>
				<input type="file" name="upl" multiple />
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>
             </div>
                            </div>
                        </form>
<?php foreach($data1 as $imgs) { ?>
<div class="col-md-4">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-puzzle-piece"></i> Gallary Image</h3>
<div class="box-tool">
<a data-action="close" href="<?php echo base_url();?>admin.php/Delete/multi/<?php echo $imgs['mid'];?>/<?php echo $imgs['serv_id'];?>"><i class="fa fa-times"></i></a>
</div>
</div>
<div class="box-content">
<div class="alert alert-info">
<!--<button class="close" data-dismiss="alert"><a href="<?php echo base_url();?>admin.php/Delete/multi/<?php echo $imgs['mid'];?>/<?php echo $imgs['serv_id'];?>">×</a></button>-->
<img src="<?php echo base_url();?>uploads/<?php echo $imgs['img'];?>" style="width:200px; height:130px;"/>
</div>
</div>
</div>
</div>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

       
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>

  <script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'txt_notes' );
</script>
<link href="<?php echo base_url();?>assets1/css/style.css" rel="stylesheet" />

		<script src="<?php echo base_url();?>assets1/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="<?php echo base_url();?>assets1/js/jquery.ui.widget.js"></script>
		<script src="<?php echo base_url();?>assets1/js/jquery.iframe-transport.js"></script>
		<script src="<?php echo base_url();?>assets1/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="<?php echo base_url();?>assets1/js/script.js"></script>


		<!-- Only used for the demos. Please ignore and remove. --> 
        <script src="http://cdn.tutorialzine.com/misc/enhance/v1.js" async></script>