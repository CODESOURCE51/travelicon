<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gazole Mahavidyalaya</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>site/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>site/css/globalstyle.css" />
<link href="<?php echo base_url();?>site/css/flexslider.css" rel="stylesheet" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>site/css/responsive.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>site/css/jquery.mCustomScrollbar.min.css" />

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

</head>

<body>

<div class="body_background">
	<div class="header">
    	<div class="top_header">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-12">
                    	<ul class="list-unstyled list-inline pull-right">
                        	<!--<li><a href="">Notice</a></li>-->
                            <li><a href="">Tender</a></li>
                            <li><a href="">IQAC</a></li>
                           <!-- <li><a href="">Students’ Zone</a></li>
                            <li><a href="">Login</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle_header">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-5">
                    	<a href="<?php echo base_url();?>" class="logo">
                        	<img src="<?php echo base_url();?>site/images/logo.png" class="img-responsive"/>
                        </a>
                    </div>
                    <div class="col-lg-3 pull-right">
                    	<img src="<?php echo base_url();?>site/images/helpline.png" class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
        <div class="header_menu">
        	<div class="container background">
      			<div class="row menu">
        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main_menu">
          				<nav>
            				<ul class="nav nav-justified">
              					<li><a href="<?php echo base_url();?>" class="active">Home</a></li>
              					<li><a href="">About Us</a>
                                    <ul class="mydropdown list-unstyled">
                                        <li><a href="<?php echo base_url();?>index.php/Page/History">Brief History</a></li>
                                        <li><a href="<?php echo base_url();?>index.php/Page/Mission">Misson &amp; Vision</a></li>
                                        <li><a href="<?php echo base_url();?>index.php/Page/Principal">Principals Desk</a></li>
                                        <li><a href="<?php echo base_url();?>uploads/PROSPECTUS.pdf" target="_blank">Prospectus</a></li>  
                                    </ul>
              					</li>
                          		<li><a href="">Administration</a>
                                	<ul class="mydropdown list-unstyled">
                                        <li><a href="<?php echo base_url();?>index.php/Page/Administrator">Administrator</a></li>
                                        <li><a href="<?php echo base_url();?>index.php/Page/Staff">Support Staff</a></li>
                                        <li><a href="">List of Holidays</a></li>
                                    </ul>
                                </li>
                          		<li><a href="<?php echo base_url();?>index.php/Page/Facilities">Facilities</a></li>
                            	<li><a href="<?php echo base_url();?>index.php/Page/Courses">Courses</a></li>
                          		<li><a href="">Admission</a>
                                	<ul class="mydropdown list-unstyled">
                                        <li><a href="<?php echo base_url();?>index.php/Page/RulesRegulation">Rules &amp; Regulations</a></li>
                                        <li><a href="<?php echo base_url();?>index.php/Page/SubjectCombination">Subject Combination</a></li>
                                        <li><a href="<?php echo base_url();?>index.php/Page/IntakeCapacity">Intake Capacity</a></li>
                                        <li><a href="<?php echo base_url();?>index.php/Page/FeesStructure">Fee Structure</a></li>
                                        <li><a href="">Online Admission</a></li>
                                    </ul>
                                </li>
                               	<li><a href="javascript:void(0);">Department</a>
                                	<ul class="mydropdown list-unstyled">
                                        <?php foreach($department as $depList) { ?>
                    	<li><a href="<?php echo base_url();?>index.php/Page/Departments/<?php echo $depList['book_id'];?>"><span><?php echo $depList['name'];?></span></a></li>
                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url();?>index.php/Page/Gallery">Gallery</a></li>
								<li><a href="<?php echo base_url();?>index.php/Page/ContactUs">Contact Us</a></li>
                      		</ul>
          				</nav>
        			</div>
      			</div>
    		</div>
        </div>
    </div>
    <div class="slider">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <section class="main_slider">
                    <div id="main-slider" class="flexslider">
                      <ul class="slides">
                      <?php foreach($slider as $slider) { ?>
                    	<li> <img alt="" src="<?php echo base_url();?>uploads/<?php echo $slider['uplds'];?>" /></li>
                        <?php } ?>
                       
                      </ul>
                    </div>
                  </section>
        		</div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                	<div class="notice_board">
            	<h4 class="sec_tittle">
                	Notice Board
                </h4>
                <div class="scroll">
                    <ul class="list-unstyled notice_list">
                    <?php foreach($notice as $notc) { 
					$expD = explode('/',$notc['date']);
 					?>
                        <li>
                            <a href="<?php echo base_url();?>uploads/<?php echo $notc['uplds'];?>" target="_blank">
                                <div class="notice_calender">
                                    <span class="date"><?php echo $expD[1];?></span>
                                    <span class="month"><?php echo date('M', mktime(0, 0, 0,$expD[0], 10));?></span>
                                </div>
                                <div class="notice_content">
                                    <?php echo $notc['service_name'];?>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                          
                    </ul>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>