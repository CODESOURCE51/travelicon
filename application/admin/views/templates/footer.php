<footer>
            <p>2016 © Travel Icon</p>
        </footer>

        <a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
<!--basic scripts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery-cookie/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/data-tables/bootstrap3/dataTables.bootstrap.js"></script>

<!--page specific plugin scripts-->
<script src="<?php echo base_url();?>assets/flot/jquery.flot.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/chosen-bootstrap/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-duallistbox/duallistbox/bootstrap-duallistbox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/dropzone/downloads/dropzone.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/clockface/js/clockface.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-switch/static/js/bootstrap-switch.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<!--flaty scripts-->
<script src="<?php echo base_url();?>js/flaty.js"></script>
<script src="<?php echo base_url();?>js/flaty-demo-codes.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/sweet-alert.css">
</div>
<!-- END Container -->
<script type="text/javascript">
	function check_type(val) {
		if( val == 'web') {
			$('#domain').css('display','block');
		} else {
			$('#domain').css('display','none');
		}
	}
	function service_type(val) {
		if( val == 'many') {
			$('#duration').css('display','block');
		} else {
			$('#duration').css('display','none');
		}
	}
function validate_client() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_client').val() == '') {
                                    errors.push('Please Add Book Name');  
                                }
                                if ($('#txt_phn').val() == '') {
                                    errors.push('Please Add Book Author Name');  
                                }
                                if ($('#txt_email').val() == '') {
                                    errors.push('Please Add Book Price');  
                                }
                                if ($('#txt_company').val() == '') {
                                    errors.push('Please Add Book Discount %');  
                                }
                                if ($('#txt_address').val() == '') {
                                    errors.push('Please Add Book Description');  
                                }
                                if ($('#txt_file').val() == '') {
                                    errors.push('Please Add Book Image');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_client1() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_client').val() == '') {
                                    errors.push('Please Add Book Name');  
                                }
                                if ($('#txt_phn').val() == '') {
                                    errors.push('Please Add Book Author Name');  
                                }
                                if ($('#txt_email').val() == '') {
                                    errors.push('Please Add Book Price');  
                                }
                                if ($('#txt_company').val() == '') {
                                    errors.push('Please Add Book Discount %');  
                                }
                                if ($('#txt_address').val() == '') {
                                    errors.push('Please Add Book Description');  
                                }
                                
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_clientimage() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_file').val() == '') {
                                    errors.push('Please Add Book Image');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_service() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_service').val() == '') {
                                    errors.push('Please Add Name');  
                                }

                                if ($('#txt_file').val() == '') {
                                    errors.push('Please Upload File');  
                                }

                               
                                
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}

function validate_project() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_project').val() == '') {
                                    errors.push('Please Add Service Name');  
                                }
                                if (!$("input[name='txt_type']:checked").val()) {
                                    errors.push('Please Select Project type');  
                                }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
function validate_serviceassign() {
 //ShowExitPopup = false;
                                isExit=false;
                                internal = 1;
                                var isErrors = false;
                                var phonefilter = /^([0-9\-\+\(\)]{8,22})+$/;
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                var errors = new Array();
                                var txt = '';
                                //txt += 'The following fields contain input errors:<br><br> <ul> ';
                               
                                if ($('#txt_client').val() == '') {
                                    errors.push('Please Select Client Name');  
                                }
								if ($('#txt_stype').val() == '') {
                                    errors.push('Please Select Type');  
                                }
								if ($('#txt_service').val() == '') {
                                    errors.push('Please Select Service Name');  
                                }
								if ($('#txt_cost').val() == '') {
                                    errors.push('Please Add Cost');  
                                }
			                	if ($('#txt_stype').val() == 'many') 
                                               {
								if ($('#txt_duration').val() == '') {
                                    errors.push('Please Add Duration');  
                                }
								if ($('#txt_alloc_date').val() == '') {
                                    errors.push('Please Add Allocation Date');  
                                }
                                                    }
                                txt += '</ul><br>Please review your input and submit the form again!';
                                if (errors.length == 0) {
                                                                       
                                    return true;                                
                                } else {
                                   swal({
        title: "Error!",
        text: errors.join('\n'),
        type: "error",
        confirmButtonText: "Close"
      });
      return false;
                                }
}
</script>
</body>
</html>
