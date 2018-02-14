	<?php include('include/header.php'); ?>
    <div class="main_content">
    	<div class="container">
        	
            <div class="row container_one">
            	<!--<div class="col-lg-3">
                	<div class="widget_box">
                    	<h4 class="sec_tittle">Subjects
                    </h4>
                    </div>
                    <ul class="list-unstyled subjects">
                    	<?php foreach($department as $depList) { ?>
                    	<li><a href="<?php echo base_url();?>index.php/Page/Departments/<?php echo $depList['book_id'];?>"><span><?php echo $depList['name'];?></span></a></li>
                        <?php } ?>
                    </ul>
                    <a href="<?php echo base_url();?>index.php/Page/Gallery" class="gallery" style="padding-top:30px; float:left">
                    	<img src="<?php echo base_url();?>site/images/gallery.png" class="img-responsive" style="border-radius:30px 0px 0px 0px" />
                    </a>
                     <?php include('include/admission_link.php'); ?>
                </div>-->
                <div class="col-lg-12">
                	<div class="prinipal">
                	<div class="text_content">
                   <!-- HERE -->
                    <div class="row">
                    	<div class="col-lg-6">
                        <h4 class="sec_tittle">
                       Send A Message
                    </h4><br>
                        
                        	<form class = "form-horizontal" role = "form" name="contact_form" action="<?php echo base_url();?>index.php/Page/ContactSubmit" method="post">
   
                               <div class = "form-group">
                                  <label for = "name" class = "col-sm-3 control-label text-left">Name</label>
                                    
                                  <div class = "col-sm-9">
                                     <input type = "text" class = "form-control" id = "name" name="name">
                                  </div>
                               </div>
                               
                               <div class = "form-group">
                                  <label for = "email" class = "col-sm-3 control-label text-left">Email Id</label>
                                    
                                  <div class = "col-sm-9">
                                     <input type="email" class = "form-control" id = "email" name="email">
                                  </div>
                               </div>
                               
                               <div class = "form-group">
                                  <label for = "ph" class = "col-sm-3 control-label  text-left">Phone Number</label>
                                    
                                  <div class = "col-sm-9">
                                     <input type = "text" class = "form-control" id = "ph"  name="phn">
                                  </div>
                               </div>
                               
                               <div class = "form-group">
                                  <label for = "enquiry" class = "col-sm-3 control-label  text-left">Enquiry Type</label>
                                    
                                  <div class = "col-sm-9">
                                      <select class = "form-control" name="type">
                                         <option value="Admission">Admission</option>
                                         <option value="Others">Others</option>
                                      </select>
                                  </div>
                               </div>
                               
                               <div class = "form-group">
                                  <label for = "msg" class = "col-sm-3 control-label  text-left">Message</label>
                                    
                                  <div class = "col-sm-9">
                                      <textarea class="form-control" rows="6" name="msg"></textarea>
                                  </div>
                               </div>
                               
                               <div class = "form-group">
                                  <div class = "col-sm-offset-3 col-sm-9">
                                     <button type = "submit" class = "btn btn-md btn-success">Send</button>
                                  </div>
                               </div>
                                
                            </form>
                        </div>
                        <div class="col-lg-6">
                        	<h4 class="sec_tittle">
                       Contact Details
                    </h4><br>
                            <div class="address">
                            	<p><strong>Address  : </strong>Gazole Mahavidyalaya<br>
                                    Gazole, P.O. Bagsarai<br>
                                    Pin. 732 124, Dist. Malda<br>
                                    West Bengal, India</p>
                                    <p><strong>Telephone  : </strong>+91 9197 203 999</p>
                                    <p><strong>Email Id  : </strong>gazolemahavidyalaya@yahoo.com</p>
                            
                            </div>
                            
                            <div class="map">
                            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.108503242055!2d88.17872641436817!3d25.199563137789866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb1e164f2296fd%3A0xa311c7eafdbd29ee!2sGazole+Mahavidyalaya!5e0!3m2!1sen!2sin!4v1470915875983" width="555" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    
                    </div>
                	</div>
            		</div>
                </div>
                
            </div>
            
        </div>
    </div>
    <?php include('include/footer.php'); ?>