<?php
//echo '<pre>';
//print_r($all_admin);
//exit();
//
//?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View All Departments</h1>
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
                        <th>Department ID</th>
                        <th>Department Name</th>
                        <th>Department Description</th>
                        <th>Department Status</th>
                        <th>Action Buttons</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($dept_data as $v_dept) {?>
                        <tr>
                            <td><?php echo $v_dept->dept_id?></td>
                            <td><?php echo $v_dept->dept_name?></td>
                            <td><?php echo $v_dept->dept_desc?></td>
                            
                            <td>
                                <?php
                                if($v_dept->dept_status == 1){

                                    echo 'Active';
                                }
                                elseif($v_dept->dept_status == 2){
                                    echo 'Inactive';
                                }

                                ?>
                            </td>
                            <td>
                                <?php if($v_dept->dept_status ==1 ){?>

                                    <a href="<?php echo base_url("change-dept-status/$v_dept->dept_id/2")?>" class='btn btn-primary btn-sm' title="Update Status">
                                        <i class="glyphicon glyphicon-thumbs-up"></i>
                                    </a>

                                <?php } elseif($v_dept->dept_status ==2) { ?>

                                    <a href="<?php echo base_url("change-dept-status/$v_dept->dept_id/1")?>" class='btn btn-primary btn-sm' title="Update Status">
                                        <i class="glyphicon glyphicon-thumbs-down"></i>
                                    </a>

                                <?php } ?>





                                <a href="<?php echo base_url("edit-dept/$v_dept->dept_id")?>" class="btn btn-success" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="<?php echo base_url("delete-dept/$v_dept->dept_id")?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure want to delete!!')"><span class="glyphicon glyphicon-trash"></span></a>



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