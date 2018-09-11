<?php
//echo '<pre>';
//print_r($all_admin);
//exit();
//
//?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View All Doctors</h1>
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
                        <th>Doctor ID</th>
                        <th>Doctor Name</th>
                        <th>Doctor Image</th>
                        <th>Doctor E-mail</th>
                        <th>Mobile No</th>
                        <th>Doctor Qualification</th>
                        <th>Doctor Designation</th>
                        <th>Doctor Category</th>
                        <th>Doctor Symptoms</th>
                        <th>Doctor disease</th>
                        <th>Doctor Chamber</th>
                        <th>Hospital Name</th>
                        <th>Birth Date</th>
                        <th>Join Date</th>
                        <th>Doctor Fees</th>
                        <th>Doctor Status</th>
                        <th>Action Buttons</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($doctor_data as $v_doctor) {




                        $dept = $this->doctor_model->get_dept_record($v_doctor->doc_category);
                        $hospital = $this->hospital_model->get_hospital_record($v_doctor->hospital_id);

                        //print_r($hospital);
                        //exit();

                        ?>
                        <tr>
                            <td><?php echo $v_doctor->doc_id ?></td>
                            <td><?php echo $v_doctor->doc_name ?></td>
                            <td>
                                <img src="<?php echo base_url() . $v_doctor->doc_image ?>" width="100" height="100">


                            </td>
                            <td><?php echo $v_doctor->doc_email ?></td>
                            <td><?php echo $v_doctor->doc_mobile_no ?></td>
                            <td><?php echo $v_doctor->doc_qualification ?></td>
                            <td><?php echo $v_doctor->doc_designation ?></td>
                            <td><?php echo $dept->dept_name?></td>

                            <td><?php echo $v_doctor->symptoms ?></td>
                            <td><?php echo $v_doctor->disease ?></td>
                            <td><?php echo $v_doctor->doc_chamber ?></td>
                            <td><?php echo $hospital->hospital_name ?></td>
                            <td><?php echo $v_doctor->doc_birth_date ?></td>
                            <td><?php echo $v_doctor->doc_join_date ?></td>
                            <td><?php echo $v_doctor->doc_fee ?></td>

                            <td>
                                <?php
                                if ($v_doctor->doc_status == 1) {

                                    echo 'Active';
                                } elseif ($v_doctor->doc_status == 2) {
                                    echo 'Inactive';
                                }

                                ?>
                            </td>
                            <td>
                                <?php if ($v_doctor->doc_status == 1) { ?>

                                    <a href="<?php echo base_url("change-doctor-status/$v_doctor->doc_id/2") ?>"
                                       class='btn btn-primary btn-sm' title="Update Status">
                                        <i class="glyphicon glyphicon-thumbs-up"></i>
                                    </a>

                                <?php } elseif ($v_doctor->doc_status == 2) { ?>

                                    <a href="<?php echo base_url("change-doctor-status/$v_doctor->doc_id/1") ?>"
                                       class='btn btn-primary btn-sm' title="Update Status">
                                        <i class="glyphicon glyphicon-thumbs-down"></i>
                                    </a>

                                <?php } ?>


                                <a href="<?php echo base_url("view-doctor/$v_doctor->doc_id") ?>"
                                   class="btn btn-warning" title="View"><span
                                        class="glyphicon glyphicon-eye-open"></span></a>
                                <a href="<?php echo base_url("edit-doctor/$v_doctor->doc_id") ?>"
                                   class="btn btn-success" title="Edit"><span
                                        class="glyphicon glyphicon-edit"></span></a>
                                <a href="<?php echo base_url("delete-doctor/$v_doctor->doc_id") ?>"
                                   class="btn btn-danger" title="Delete"
                                   onclick="return confirm('Are you sure want to delete!!')"><span
                                        class="glyphicon glyphicon-trash"></span></a>


                            </td>
                        </tr>


                    <?php } ?>
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

    function confirm_delete() {
        return confirm("Are you sure?");
    }

</script>