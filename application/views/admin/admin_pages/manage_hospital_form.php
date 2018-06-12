<?php
//echo '<pre>';
//print_r($all_admin);
//exit();
//
//?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View All Hospitals</h1>
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
                        <th>Hospital ID</th>
                        <th>Hospital Name</th>
                        <th>Doctor Name</th>
                        <th>Doctor Category</th>
                        <th>Hospital Description</th>
                        <th>Cabin Description</th>
                        <th>Cabin Charge</th>
                        <th>Hospital Contact</th>
                        <th>Hospital Location</th>
                        <th>Hospital Status</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($hospital_data as $v_hospital) {

                        $doc_name = $this->doctor_model->get_doctor_record_for_image($v_hospital->doctor_name);

                        $doc_category = $this->doctor_model->get_doctor_record_for_image($v_hospital->doctor_category);

                        $cabin_charge =  $this->cabin_model->get_cabin_record($v_hospital->cabin_charge);


                        $cabin_desc =  $this->cabin_model->get_cabin_record($v_hospital->cabin_desc);

                        ?>
                        <tr>
                            <td><?php echo $v_hospital->hospital_id?></td>
                            <td><?php echo $v_hospital->hospital_name?></td>
                            <td><?php echo $doc_name->doc_name?></td>
                            <td><?php echo $doc_category->doc_category?></td>
                            <td><?php echo $v_hospital->hospital_desc?></td>
                            <td><?php echo $cabin_desc->cabin_desc?></td>
                            <td><?php echo $cabin_charge->cabin_charge?></td>
                            <td><?php echo $v_hospital->hospital_contact?></td>
                            <td><?php echo $v_hospital->hospital_location?></td>
                            <td>
                                <?php
                                if($v_hospital->hospital_status ==1){

                                    echo 'Active';
                                }
                                elseif($v_hospital->hospital_status ==2){
                                    echo 'Inactive';
                                }

                                ?>
                            </td>
                            <td>
                                <?php if($v_hospital->hospital_status ==1 ){?>

                                    <a href="<?php echo base_url("change-hospital-status/$v_hospital->hospital_id/2")?>" class='btn btn-primary btn-sm' title="Update Status">
                                        <i class="glyphicon glyphicon-thumbs-up"></i>
                                    </a>

                                <?php } elseif($v_hospital->hospital_status ==2) { ?>

                                    <a href="<?php echo base_url("change-hospital-status/$v_hospital->hospital_id/1")?>" class='btn btn-primary btn-sm' title="Update Status">
                                        <i class="glyphicon glyphicon-thumbs-down"></i>
                                    </a>

                                <?php } ?>




                                <a href="<?php echo base_url("view-hospital/$v_hospital->hospital_id")?>" class="btn btn-warning" title="View"><span class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="<?php echo base_url("edit-hospital/$v_hospital->hospital_id")?>" class="btn btn-success" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="<?php echo base_url("delete-hospital/$v_hospital->hospital_id")?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure want to delete!!')"><span class="glyphicon glyphicon-trash"></span></a>



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