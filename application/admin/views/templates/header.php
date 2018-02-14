<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Travel Icon Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!--base css styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/chosen-bootstrap/chosen.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap-datepicker/css/datepicker.css"/>

    <!--page specific css styles-->

    <!--flaty css styles-->
    <link rel="stylesheet" href="<?php echo base_url();?>css/flaty.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/flaty-responsive.css">

    <link rel="shortcut icon" href="img/favicon.png">
</head>
<body>

<!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
    <button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
        <span class="fa fa-bars"></span>
    </button>
    <a class="navbar-brand" href="#">
        <small>
            <i class="fa fa-desktop"></i>
           Travel Icon 
        </small>
    </a>

    <!-- BEGIN Navbar Buttons -->
    <ul class="nav flaty-nav pull-right">

        <!-- BEGIN Button Notifications -->
        <li class="hidden-xs">
            <!-- <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-important"> <?php echo $total_notify;?></span>
            </a> -->

            <!-- BEGIN Notifications Dropdown -->
            <ul class="dropdown-navbar dropdown-menu">
                <!-- <li class="nav-header">
                    <i class="fa fa-warning"></i>
                    <?php echo $total_notify;?> Notifications
                </li> -->
                <?php //foreach($notify as $valnotify){?>
                <!-- <li class="notify">
                    <a href="#">
                        <i class="fa fa-comment orange"></i>

                        <p><?php echo $valnotify['client_name']." (".$valnotify['service_name'].")";?></p>
                        <span class="badge badge-warning"></span>
                    </a>
                </li> -->
                <?php //}?>

               <!--  <li class="more">
                    <a href="<?php echo base_url()?>index.php/View/PaymentList">See all notifications</a>
                </li> -->
            </ul>
            <!-- END Notifications Dropdown -->
        </li>
        <!-- END Button Notifications -->

        <!-- BEGIN Button User -->
        <li class="user-profile">
            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                <img class="nav-user-photo" src="<?php echo base_url();?>/img/<?php echo $_SESSION['photo'];?>" alt="Penny's Photo"/>
<span class="hhh" id="user_info">
<?php echo $_SESSION['name'];?>
</span>
                <i class="fa fa-caret-down"></i>
            </a>

            <!-- BEGIN User Dropdown -->
            <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                <li class="nav-header">
                
                </li>


                <li>
                    <a href="<?php echo base_url();?>admin.php/Edit/Editprofile">
                        <i class="fa fa-user"></i>
                        Edit Profile
                    </a>
                </li>

                <li class="divider visible-xs"></li>


                <li class="visible-xs">
                    <a href="#">
                        <i class="fa fa-bell"></i>
                        Notifications
                        <span class="badge badge-important">8</span>
                    </a>
                </li>
                <li class="divider"></li>

                <li>
                    <a href="<?php echo base_url();?>admin.php/Index/logout">
                        <i class="fa fa-off"></i>
                        Logout
                    </a>
                </li>
            </ul>
            <!-- BEGIN User Dropdown -->
        </li>
        <!-- END Button User -->
    </ul>
    <!-- END Navbar Buttons -->
</div>
<!-- END Navbar -->

<!-- BEGIN Container -->
<div class="container" id="main-container">
    <!-- BEGIN Sidebar -->
    <div id="sidebar" class="navbar-collapse collapse">
        <!-- BEGIN Navlist -->
        <ul class="nav nav-list">
            <li>
                <a href="<?php echo base_url();?>admin.php/Index/dashboard">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Add / Write</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>

                <!-- BEGIN Submenu -->
                <ul class="submenu">
                    <li><a href="<?php echo base_url();?>admin.php/Index/WeekendLeisures">Add Weekend Leisures</a></li>
                    <li><a href="<?php echo base_url();?>admin.php/Index/Destination">Destination Entry</a></li>
                     <li><a href="<?php echo base_url();?>admin.php/Index/HotelDetails">Add Hotel Details</a></li>
                     <li><a href="<?php echo base_url();?>admin.php/Index/Package">Add Packages</a></li> 
                     <!--<li><a href="<?php echo base_url();?>admin.php/Index/Principal">Principal's Desk</a></li>  
                     <li><a href="<?php echo base_url();?>admin.php/Index/CourseIntake">Courses / Intake Capacity & Sub. Comb. & Rules Reg.</a></li> 
                     <li><a href="<?php echo base_url();?>admin.php/Index/FeesStructure">Fees Structure</a></li> 
                     <li><a href="<?php echo base_url();?>admin.php/Index/GallerySlider">Gallery / Slider Image</a></li> -->
                                     
                </ul>
                <!-- END Submenu -->
            </li>
             <li>
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>View</span>
                    <b class="arrow fa fa-angle-right"></b>
                </a>

                <!-- BEGIN Submenu -->
                <ul class="submenu">
                    <li><a href="<?php echo base_url();?>admin.php/view/WeekendLeisures">Weekend Leisures</a></li>
                    <li><a href="<?php echo base_url();?>admin.php/view/Destination">Destination Entry</a></li>
                     <li><a href="<?php echo base_url();?>admin.php/view/HotelDetails">Hotel Details</a></li>
                     <li><a href="<?php echo base_url();?>admin.php/view/Package">Packages</a></li> 
                     <!--<li><a href="<?php echo base_url();?>admin.php/view/Principal">Principal's Desk</a></li>  
                     <li><a href="<?php echo base_url();?>admin.php/view/CourseIntake">Courses / Intake Capacity & Sub. Comb. & Rules Reg.</a></li> 
                     <li><a href="<?php echo base_url();?>admin.php/view/FeesStructure">Fees Structure</a></li> 
                     <li><a href="<?php echo base_url();?>admin.php/view/GallerySlider">Gallery / Slider Image</a></li> -->
                                     
                </ul>
                <!-- END Submenu -->
            </li>
            
            <?php /*?><li>
                <a href="<?php echo base_url();?>index.php/view/Client">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Client List</span>
                </a>
            </li><?php */?>
             <?php /*?><li>
                <a href="<?php echo base_url();?>index.php/view/Projects">
                    <i class="fa fa-circle-o-notch"></i>
                    <span>Project List</span>
                </a>
            </li><?php */?>
           
            
            
            

        </ul>
        <!-- END Navlist -->

        <!-- BEGIN Sidebar Collapse Button -->
        <div id="sidebar-collapse" class="visible-lg">
            <i class="fa fa-angle-double-left"></i>
        </div>
        <!-- END Sidebar Collapse Button -->
    </div>
    <!-- END Sidebar -->

