<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Update Gallery / Slider Image</h1>
                
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
                        <h3><i class="fa fa-bars"></i>Update Gallery / Slider Image</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>admin.php/Update/GallerySlider" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return gallery();">
                        <input type="hidden" name="cid" value="<?php echo $data[0]['img_id'];?>" />
                          <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                               Gallery : <input type="radio" name="txt_btype" class="txt_btype" value="1" <?php if($data[0]['type'] == 1){ ?>checked<?php } ?>> <br/>
                               Slider : <input type="radio" name="txt_btype" class="txt_btype" value="2" <?php if($data[0]['type'] == 2){?>checked<?php } ?>>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Previous Image</label>

                                <div class="col-sm-9 col-lg-10 controls">
                               <img src="<?php echo base_url();?>uploads/<?php echo $data[0]['uplds'];?>" height="90" width="110" />
                                    
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">File</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                <input type="file" id="datepicker" class="form-control show-popover" data-trigger="hover"
                                           data-content="Select File"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_file" id="txt_file">
                                    
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>admin.php/view/GallerySlider" class="btn">View Gallery / Slider Image</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
 
function shw_date(dval) {
	if(dval == 1) {
	$('#datePi').css('display','block')	;
	$('#cont').css('display','none')	;
		}
	else {
	$('#datePi').css('display','none')	;
	$('#cont').css('display','block')	;	
		}
	}  
  </script>