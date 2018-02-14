<?php include_once('templates/header.php');?>

    <!-- BEGIN Content -->
   <div id="main-content">
        <!-- BEGIN Page Title -->
        <div class="page-title">
            <div>
                <h1><i class="fa fa-file-o"></i>Destination List</h1>
                
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
                <li class="active">Destination List</li>
            </ul>
        </div>
        <!-- END Breadcrumb -->

        <!-- BEGIN Main Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-title">
                        <h3><i class="fa fa-table"></i> Destination List</h3>

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
                                    <th>Title / Name</th>
                                    <th>File</th>
                                    <th>Short Content</th>
                                    <th>Long Content</th>
                                     <th>Sale</th>
                                     <th>Publish</th>
                                     <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $values) { 
								$exp = explode('.',$values['uplds']);
								
								$img_path = base_url().'uploads/'.$values['uplds'];
								$a_tag =  'javascript:void(0);';
								$targ = '';
								
								?>
                                    <tr class="table-flag-blue">
                                    <td><?php echo $values['service_name'];?></td>
                                    <td><a href="<?php echo $a_tag;?>" <?php echo $targ;?>><img src="<?php echo $img_path;?>" height="90" width="110" /></a></td>
                                    <td><?php echo $values['note'];?></td>
                                    <td><?php echo $values['lnote'];?></td>
                                    <td><?php echo $values['sale'];?></td>
                                    <td><?php if($values['publish'] == 0){ ?><a href="<?php echo base_url();?>admin.php/Update/PublishP/<?php echo $values['service_id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="Publish" data-original-title="Admin Action" data-placement="top"><i class="fa fa-home"></i></button></a><?php } else { ?><a href="<?php echo base_url();?>admin.php/Update/PublishU/<?php echo $values['service_id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="UnPublish" data-original-title="Admin Action" data-placement="top"><i class="fa fa-cross"></i></button></a><?php } ?></td>
                                     <td><a href="<?php echo base_url();?>admin.php/Edit/Destination/<?php echo $values['service_id'];?>"><button class="btn btn-circle btn-bordered btn-lime show-popover" data-trigger="hover" data-content="Edit This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-edit"></i></button></a>&nbsp;&nbsp;<a href="<?php echo base_url();?>admin.php/Delete/Destination/<?php echo $values['service_id'];?>"><button class="btn btn-circle btn-bordered btn-warning btn-to-gray show-popover" data-trigger="hover" data-content="Delete This Content" data-original-title="Admin Action" data-placement="top"><i class="fa fa-trash-o"></i></button></a></td>
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
