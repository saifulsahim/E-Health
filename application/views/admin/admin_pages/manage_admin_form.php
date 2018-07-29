<?php
//echo '<pre>';
//print_r($all_admin);
//exit();
//
//?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View All Admin</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
<!--            <div class="panel-heading">-->
<!--                DataTables Advanced Tables-->
<!--            </div>-->
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Admin ID</th>
                        <th>Admin Name</th>
                        <th>Admin Image</th>
                        <th>Admin E-mail</th>
                        <th>Admin Status</th>
                        <th>Action Buttons</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($all_admin as $v_admin) {?>
                        <tr>
                            <td><?php echo $v_admin->admin_id?></td>
                            <td><?php echo $v_admin->admin_name?></td>
                            <td>
                                <img src="<?php echo base_url() . $v_admin->admin_image ?>" width="100"
                                     height="100">
                            </td>
                            <td><?php echo $v_admin->admin_email?></td>

                            <td>
                                <?php
                                    if($v_admin->admin_status ==1){

                                        echo 'Active';
                                    }
                                    elseif($v_admin->admin_status ==2){
                                        echo 'Inactive';
                                    }

                                ?>
                            </td>
                            <td>
                                <?php if($v_admin->admin_status ==1 ){?>

                                    <a href="<?php echo base_url("change-admin-status/$v_admin->admin_id/2")?>" class='btn btn-primary btn-sm' title="Update Status">
                                        <i class="glyphicon glyphicon-thumbs-up"></i>
                                    </a>

                                     <?php } elseif($v_admin->admin_status ==2) { ?>

                                    <a href="<?php echo base_url("change-admin-status/$v_admin->admin_id/1")?>" class='btn btn-primary btn-sm' title="Update Status">
                                        <i class="glyphicon glyphicon-thumbs-down"></i>
                                    </a>

                                <?php } ?>





                                <a href="<?php echo base_url("edit-admin/$v_admin->admin_id")?>" class="btn btn-success" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="<?php echo base_url("delete-admin/$v_admin->admin_id")?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure want to delete!!')"><span class="glyphicon glyphicon-trash"></span></a>



                            </td>
                        </tr>


                        <?php }?>
                    </tbody>
                </table>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<script>

    function confirm_delete(){
        return confirm("Are you sure?");
    }

</script>