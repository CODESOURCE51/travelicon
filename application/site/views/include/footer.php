<div class="carasoul" style="padding:25px 0px;">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<marquee>
                    <a href="http://amanmovement.org/" target="_blank"><img src="<?php echo base_url();?>site/images/aman-movement.png" height="50"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="http://www.ugb.ac.in/" target="_blank"><img src="<?php echo base_url();?>site/images/gour-banga.png" height="50"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="http://www.nbu.ac.in/" target="_blank"><img src="<?php echo base_url();?>site/images/north-bengal-university.png" height="50"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="http://www.ugc.ac.in/" target="_blank"><img src="<?php echo base_url();?>site/images/UGC.png" height="50"></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="http://www.highereducationwb.in/" target="_blank"><img src="<?php echo base_url();?>site/images/wbhe.png" height="50"></a>
                </marquee>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
  	<div class="footer_top">
  		<div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 footer_block a">
                    <h4 class="sec_tittle_3">
                       Quick Links
                    </h4>
                    <ul class="list-unstyled q_link">
                    	<li><a href="<?php echo base_url();?>index.php/Page/History">Brief History</a></li>
                      	<li><a href="<?php echo base_url();?>index.php/Page/Mission">Mission &amp; Vision</a></li>
                 		<li><a href="<?php echo base_url();?>index.php/Page/Principal">Principals Desk</a></li>
                    	<li><a href="">Prospectus</a></li>  
                        <li><a href="<?php echo base_url();?>index.php/Page/Administrator">Governing Body</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Page/Staff">Support Staff</a></li>
                        <li><a href="">List of Holidays</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 footer_block a">
                    
                    <h4 class="sec_tittle_3">
                       Quick Links
                    </h4>
                    <ul class="list-unstyled q_link">
                    	<li><a href="<?php echo base_url();?>index.php/Page/Facilities">Facilities</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Page/Courses">Courses</a></li>	
                        <li><a href="<?php echo base_url();?>index.php/Page/RulesRegulation">Rules &amp; Regulations</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Page/SubjectCombination">Subject Combination</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Page/IntakeCapacity">Intake Capacity</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Page/FeesStructure">Fee Structure</a></li>
                        <li><a href="">Online Admission</a></li>
                    </ul>
                    
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 footer_block">
                    <h4 class="sec_tittle_3">
                       Address
                    </h4>
                    <p>Gazole Mahavidyalaya<br />
                   	Gazole, P.O. Bagsarai<br />
   					Pin. 732 124, Dist. Malda<br />
   					West Bengal, India<br />
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 footer_block">
                    <h4 class="sec_tittle_3">
                       Contact Information
                    </h4>
                    <p>+91 9197 203 999<br />gazolemahavidyalaya@yahoo.com</p>
                    <ul class="list-unstyled list-inline social">
                        <li><a href=""><img src="<?php echo base_url();?>site/images/facebook.png" width="25" /></a></li>
                        <li><a href=""><img src="<?php echo base_url();?>site/images/twitter.png" width="25" /></a></li>
                    </ul>
                </div>
            </div>
    	</div>
    </div>
    <div class="footer_bottom">
  		<div class="container">
    		<div class="row">
            	<div class="col-lg-12">
                	<p class="text-center">Copyright © 2016 Gazole Mahavidyalaya. All Rights Reserved | Powered By <a href="http://projukti.info"><strong>PROJUKTI</strong></a></p>
                </div>
        	</div>
    	</div>
    </div>
    
  </footer>
</div>
</body>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url();?>site/js/bootstrap.min.js"/></script>
<script src="<?php echo base_url();?>site/js/flexslider.js"></script> 
<script src="<?php echo base_url();?>site/js/jquery.mCustomScrollbar.concat.min.js"></script> 

<script type="text/javascript">

$(document).ready(function() {
$('.thumbnail').click(function(){
      $('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
});


jQuery(function($){
	
$(".scroll").mCustomScrollbar({theme:"dark-3", scrollButtons:{ enable: true }});

  $('#main-slider').flexslider();



  jQuery('.box').niceScroll({

    autohidemode:false,

    scrollspeed: 100,

    cursorcolor: '#d84949',

    cursorwidth: '15px',

    cursorborderradius: '0px',

    cursorborder: '0',

    background: '#dddddd'

  });

});

/* ]]> */

</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
<script>
$(document).ready(function () {
//alert(screen.width);
    if (screen.width < 768) {
        $(".mydropdown").hide();
    }
    

});

</script>

</html>
