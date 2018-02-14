<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Course / Intake</h1>
                
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
                        <h3><i class="fa fa-bars"></i>Course / Intake Writing Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>admin.php/Add/CourseIntake" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_whyBooks();">
                          <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Type</label>

                                <div class="col-sm-9 col-lg-10 controls">
                               Course / Intake : <input type="radio" name="txt_btype" class="txt_btype" value="1" > <br/>
                               Subject Comb. : <input type="radio" name="txt_btype" class="txt_btype" value="2" > <br/>
                               Rule & Reg. : <input type="radio" name="txt_btype" class="txt_btype" value="3" > <br/>
                               
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Contents</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control show-popover" rows="3" data-trigger="hover"
                                           data-content="Enter Your Notes"
                                           data-original-title="Optional" data-placement="top" name="txt_notes" id="txt_notes"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>admin.php/view/CourseIntake" class="btn">View Course / Intake</a>
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
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
    <script type="text/javascript" src="http://localhost/gazoleWeb/assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'txt_notes' );
</script>