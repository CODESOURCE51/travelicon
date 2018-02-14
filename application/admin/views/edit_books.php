<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
    <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i> Update Books</h1>
               
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
                        <h3><i class="fa fa-bars"></i> Books Update Panel</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form name="service_form" action="<?php echo base_url();?>admin.php/Update/Books" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_client1();">
                        <input type="hidden" name="cid" value="<?php echo $data[0]['book_id'];?>" />
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Category Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                 <select class="form-control" name="txt_category" id="txt_category" data-rule-required="true">
                                 <?php foreach($data1 as $cat) {?>
                                   <option value="<?php echo $cat['catgory_slug'];?>" <?php if($data[0]['cat'] == $cat['catgory_slug']) echo 'selected';?>><?php echo $cat['category_name'];?></option>
                                  <?php } ?> 
                                 </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Book Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Book Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_client" id="txt_client" value="<?php echo $data[0]['book_name'];?>" />
                                </div>
                            </div>
                           <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Author Name</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Author Name"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_phn" id="txt_phn" value="<?php echo $data[0]['auth_name'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Main Price</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Book Price"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_email" id="txt_email" value="<?php echo $data[0]['price'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Publisher</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Enter Discount in %"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_company" id="txt_company" value="<?php echo $data[0]['discount'];?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Discounted Price</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <input type="text" class="form-control show-popover" data-trigger="hover"
                                           data-content="Current Price"
                                           data-original-title="Optional" data-placement="top" name="txt_curr_price" id="txt_curr_price" value="<?php echo $data[0]['cprice'];?>"/>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Description</label>

                                <div class="col-sm-9 col-lg-10 controls">
                                    <textarea class="form-control show-popover" rows="3" data-trigger="hover"
                                           data-content="Book Description"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_address" id="txt_address"><?php echo $data[0]['description'];?></textarea>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>admin.php/view/Books" class="btn">View Books</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->
         <!-- BEGIN Main Content -->
           <form name="service_form" action="<?php echo base_url();?>admin.php/Update/BooksImage" method="post" enctype="multipart/form-data" class="form-horizontal" onsubmit="return validate_clientimage();">
                        <input type="hidden" name="cid" value="<?php echo $data[0]['book_id'];?>" />
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-bars"></i> Update Category</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                       
                        <input type="hidden" name="cid" value="<?php echo $data[0]['book_id'];?>" />
                        <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Uploaded Image</label>
                        
                         <div class="col-sm-9 col-lg-10 controls show-popover" >
                         <img src="<?php echo base_url().'books/'.$data[0]['bimage'];?>" width="120" height="100">
                         </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 col-lg-2 control-label">Book Image</label>
                                
                               <div class="col-sm-9 col-lg-10 controls show-popover" >
                                    <input type="file" class="form-control show-popover" data-trigger="hover"
                                           data-content="Book Cover Image"
                                           data-original-title="Mandatory ***" data-placement="top" name="txt_file" id="txt_file">
                                    <span class="help-inline">Browse Your Avatar</span>
                                </div>
                            </div>
                           
                            

                            <div class="form-group">
                                <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Save
                                    </button>
                                    <a href="<?php echo base_url();?>admin.php/view/Books" class="btn">View Books</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </form>
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