<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Add Weekend Leisures</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Weekend Leisures Entry Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>admin.php/Add/WeekendLeisures" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_client();">
                            

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Leisures Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Book Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_client" id="txt_client" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Place Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Book Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_plc_name" id="txt_plc_name" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Short Description</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Book Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_sdesc" id="txt_sdesc" />
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Starting amount</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Book Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_samount" id="txt_samount" />
                                </div>
                            </div>
                            
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Leisures File</label>
                            <div class="col-sm-9 col-lg-10 controls show-popover" >
                                    <input type="file" class="form-control show-popover" data-trigger="hover"
                                           data-content="Book Cover Image"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_file" id="txt_file">
                                    <span class="help-inline">Browse Your File</span>
                                </div>
                                </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>admin.php/view/WeekendLeisures" class="btn">View Weekend Leisures</a>
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
<script>
    function curr_price() {
        var prc = $('#txt_email').val();
        var dic = $('#txt_company').val();
        var cPrice = +prc - (prc*dic/100);
        $('#txt_curr_price').val(cPrice);
        //alert(cPrice);
    }
</script>