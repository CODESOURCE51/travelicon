<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Write About Hotels</h1>
                
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
                        <h3><i class="fa fa-bars"></i>Hotels</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" id="upload" action="<?php echo base_url();?>admin.php/Add/HotelDetails" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_service();">
                         
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Title</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Service Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_service" id="txt_service" />
                                </div>
                            </div>
                           
                           
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Offers</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control" rows="3" name="txt_notes" id="txt_notes"></textarea>
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Destination</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                  <select class="form-control" name="txt_destiny" id="txt_destiny" data-rule-required="true">
                                  <option value="">-- Please select --</option>
                                 <?php foreach ($destination as $destiny): ?>
                                 <option value="<?php echo $destiny['service_id'];?>"> <?php echo $destiny['service_name'];?></option>
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
                                 <option value="<?php echo $wend['book_id'];?>"><?php echo $wend['name'];?></option>
                                 <?php endforeach; ?>  
                                 </select>
                                </div>
                            </div>
                         
                    
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>admin.php/view/HotelDetails" class="btn">View About Hotels</a>
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
                        <!--<form id="upload" method="post" action="<?php echo base_url();?>upload.php" enctype="multipart/form-data">
                            <div id="drop">
				Drop Here

				<a>Browse</a>
				<input type="file" name="upl" multiple />
			</div>

			<ul>
				
			</ul>
            </form>-->
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