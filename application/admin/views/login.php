<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Travel Icon Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">

    <!--page specific css styles-->

    <!--flaty css styles-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/flaty-responsive.css">

    <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.png">
</head>
<body>


<div class="login_box">
    <h2>Travel Icon Admin Panel</h2>
    <hr>
    <form action="<?php echo base_url();?>admin.php/Index/login" class="form-horizontal" method="post">
        <div class="form-group">
            <label class="col-sm-12 col-lg-12 text-left font-size-15">Username</label>

            <div class="col-sm-12 col-lg-12 controls">
                <input type="text" class="form-control" name="txt_username"/>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12 col-lg-12 text-left font-size-15">Password</label>

            <div class="col-sm-12 col-lg-12 controls">
                <input type="password" class="form-control" data-action="pwindicator"
                       data-indicator="pwindicator-block" name="txt_password"/>


                <div class="pwindicator" id="pwindicator-block">
                    <div class="bar"></div>
                    <div class="label"></div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-lg-6 col-xs-12">
                <label class="checkbox" style="padding-left: 20px; padding-bottom: 20px;">
                    <input type="checkbox" value=""/> Remember Me
                </label>

            </div>
            <div class="col-lg-6 col-xs-12">
                <a href="" class="pull-right" style="margin-top: 7px;">Forgot password ?</a>

            </div>
        </div> -->

        <button type="submit" class="btn btn-primary btn-block"> Login
        </button>
    </form>

</div>


<!--basic scripts-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery-cookie/jquery.cookie.js"></script>

<!--page specific plugin scripts-->
<script src="<?php echo base_url();?>assets/flot/jquery.flot.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.stack.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.crosshair.js"></script>
<script src="<?php echo base_url();?>assets/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url();?>assets/sparkline/jquery.sparkline.min.js"></script>
<!--flaty scripts-->
<script src="<?php echo base_url();?>js/flaty.js"></script>
<script src="<?php echo base_url();?>js/flaty-demo-codes.js"></script>

</body>
</html>
