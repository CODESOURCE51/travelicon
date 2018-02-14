<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Package Entry</h1>
                
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
                        <h3><i class="fa fa-bars"></i>Package Entry</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>admin.php/Add/Package" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_service();">
                          
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Main Package Name</label>

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
							 <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Starting Amount</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Amount"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_amount" id="txt_amount" />
                                </div>
                            </div>
                          
                             <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Image</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                <input type="file" id="datepicker" class="form-control show-popover" data-trigger="hover"
                                           data-content="Select File"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_file" id="txt_file">
                                    
                                </div>
                            </div>
                            <div id="inputs">
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Sub Package Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_sub_pack[]" id="txt_sub_pack1" />
                                </div>
                            </div>
                            
							<div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Offer 1</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control show-popover" rows="3" data-trigger="hover" data-content="Enter Your Notes" data-original-title="Optional" data-placement="top" name="txt_ofrs[]" id="txt_ofrs1"></textarea>
                                </div>
                            </div>
							
                           
                            <a href="javascript:void(0);" onclick="getinput()">Add More</a>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>admin.php/view/Package" class="btn">View Package</a>
                                </div>
                            </div>
                            <input type="hidden" name="numb" value="1" id="numb" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

        
    <!-- END Content -->
    
<?php include_once('templates/footer.php');?>

<script type="text/javascript">
function getinput()
{
	var numbr = $('#numb').val();
	var cnt = parseInt(numbr)+1;
	$('#numb').val(cnt);
	alert(cnt);
var spack='<div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Sub Package Name</label><div class="col-sm-9 col-lg-10 controls"><input type="text" class="form-control show-popover" data-trigger="hover" data-content="Enter Name" data-original-title="Mandatory ***" data-placement="top" name="txt_sub_pack[]" id="txt_sub_pack" /></div></div>'; 
var Room='<br><div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Offers</label><div class="col-sm-9 col-lg-10 controls"><textarea class="form-control show-popover" rows="3" data-trigger="hover" data-content="Enter Your Notes" data-original-title="Optional" data-placement="top" name="txt_ofrs[]" id="txt_ofrs"></textarea></div></div>';

$("#inputs").prepend(spack,Room);
}
function getmore()
{
var Room='<br><div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Room</label><div class="col-sm-9 col-lg-10 controls"><input type="text" class="form-control show-popover" data-trigger="hover" data-content="Enter Name" data-original-title="Mandatory ***" data-placement="top" name="txt_room" id="txt_room" /></div></div>';
var Tariff='<div class="form-group"><label class="col-sm-3 col-lg-2 control-label">Tariff</label><div class="col-sm-9 col-lg-10 controls"><input type="text" class="form-control show-popover" data-trigger="hover" data-content="Enter Name" data-original-title="Mandatory ***" data-placement="top" name="txt_tariff" id="txt_tariff" /></div></div>';
$("#more").prepend(Room,Tariff);
}
</script>