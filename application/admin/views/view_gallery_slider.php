<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Image List</h1>
                
            </div>
        </div>
        <!-- END Page Title -->

        <!-- BEGIN Breadcrumb -->
        <div id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="index.html">Home</a>
                    <span class="divider"><i class="fa fa-angle-right"></i></span>
                </li>
                <li class="active">Image List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Image List</h3>

                        <div class="box-tool">
                            <a data-action="collapse" href="#"><i class="fa fa-chevron-up"></i></a>
                            <a data-action="close" href="#"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <br/><br/>

                        <div class="clearfix"></div>
                        <div class="table-responsive" style="border:0">
                            <table class="table table-advance" id="table1">
                                <thead>
                                <tr>
                                    <th>File</th>
                                    <th>Type</th>
                                    <th>Published</th>
                                     <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $values) { 
								
								$img_path = base_url().'uploads/'.$values['uplds'];
								
								?>
                                    <tr class="table-flag-blue">
                                    <td><img src="<?php echo $img_path;?>" height="90" width="110" /></td>
                                    <td><?php if($values['type'] == 1) echo 'Gallery'; else echo 'Slider';?></td>
                                    <td><?php if($values['publish'] == 1) echo 'Published'; else echo 'Not Published';?><br/><?php if($values['publish'] == 1) {?><a href="<?php echo base_url();?>admin.php/Update/Hide/<?php echo $values['img_id'];?>">Hide</a><?php } else {?><a href="<?php echo base_url();?>admin.php/Update/Publish/<?php echo $values['img_id'];?>">Publish</a><?php } ?></td>
                                     <td><a href="<?php echo base_url();?>admin.php/Edit/GallerySlider/<?php echo $values['img_id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="Edit This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;<a href="<?php echo base_url();?>admin.php/Delete/GallerySlider/<?php echo $values['img_id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a></td>
                                </tr>
                               <?php } ?>
                                
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Main Content -->

       
    <!-- END Content -->

<?php include_once('templates/footer.php');?>
