<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Destination Entry</h1>
                
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
                        <h3><i class="fa fa-bars"></i>Destination Entry</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>admin.php/Add/Destination" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_service();">
                          
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Title / Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_service" id="txt_service" />
                                </div>
                            </div>
                           
                           
                            <div class="form-group" id="cont" style="display:block;">
                                <label class="col-sm-3 col-lg-2 control-label" >Short Description</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control show-popover" rows="3" data-trigger="hover"
                                           data-content="Enter Your Notes"
                                           data-original-title="Optional" data-placement="top" name="txt_notes" id="txt_notes"></textarea>
                                </div>
                            </div>

                           <div class="form-group" id="cont" style="display:block;">
                                <label class="col-sm-3 col-lg-2 control-label" >Long Description</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control show-popover" rows="3" data-trigger="hover"
                                           data-content="Enter Your Long Notes"
                                           data-original-title="Optional" data-placement="top" name="txt_long_notes" id="txt_long_notes"></textarea>
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
                                <label class="col-sm-3 col-lg-2 control-label">Sale</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Sale Date"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_sale" id="txt_sale" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>admin.php/view/Destination" class="btn">View Destination</a>
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

