<?php

$id = $this->session->userdata("admin_id");
$details = $this->admin_model->get_record($id);

?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<?php

if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) {

    $this->db->where('doc_status', 2);
    $num_rows = $this->db->count_all_results('tbl_doctor');

    if ($num_rows != 0) {
        ?>

        <div class="alert alert-info">
            You have <?= $num_rows ?> new doctor to verify!
        </div>

        <?php
    }

}
?>


<!-- /.row -->
<div class="row">

    <?php

//    var_dump($details->admin_role);
//    exit();

    if (($details->admin_role == "Patient"))



    { ?>

        <a class="btn btn-success btn-lg" href="<?php echo base_url('patient/manage_patient_individual') ?>">Appointment History</a>


        <a class="btn btn-success btn-lg" href="<?php echo base_url() ?>admin/edit_admin/<?= $this->session->userdata('admin_id'); ?>">Edit Profile</a>


    <?php } ?>





    <?php if (($details->admin_role == "Doctor")) { ?>

        <h3 style="text-align: center;">Your Profile</h3>

        <table width="100%" class="table table-striped table-bordered table-hover">


            <?php

            $doctor_id = $this->session->userdata('insert_id');


            $doctor_info = $this->doctor_model->view_doctor_details($doctor_id);
            $dept = $this->doctor_model->get_dept_record($doctor_info->doc_category);
            $hospital = $this->hospital_model->get_hospital_record($doctor_info->hospital_id);

            ?>

            <tr>

                <th>ID</th>
                <td><?php echo $doctor_info->doc_id ?></td>

            </tr>

            <tr>

                <th>Doctor Name</th>
                <td><?php echo $doctor_info->doc_name ?></td>

            </tr>

            <tr>

                <th>Doctor Image</th>
                <td><img src="<?php echo base_url() . $doctor_info->doc_image ?>" width="100" height="100"></td>
            </tr>

            <tr>

                <th>Doctor E-mail</th>
                <td><?php echo $doctor_info->doc_email ?></td>

            </tr>

            <tr>

                <th>Mobile No</th>
                <td><?php echo $doctor_info->doc_mobile_no ?></td>

            </tr>

            <tr>

                <th>Doctor Qualification</th>
                <td><?php echo $doctor_info->doc_qualification ?></td>

            </tr>


            <tr>

                <th>Doctor Designation</th>
                <td><?php echo $doctor_info->doc_designation ?></td>

            </tr>

            <tr>

                <th>Doctor Category</th>
                <td><?php echo $dept->dept_name ?></td>

            </tr>

            <tr>

                <th>Doctor Chamber</th>
                <td><?php echo $doctor_info->doc_chamber ?></td>

            </tr>


            <tr>

                <th>Hospital Name</th>
                <td><?php echo $hospital->hospital_name ?></td>

            </tr>

            <tr>

                <th>Birth Date</th>
                <td><?php echo $doctor_info->doc_birth_date ?></td>

            </tr>


            <tr>

                <th>Join Date</th>
                <td><?php echo $doctor_info->doc_join_date ?></td>

            </tr>


            <tr>

                <th>Doctor Fees</th>
                <td><?php echo $doctor_info->doc_fee ?></td>

            </tr>


            <tr>

                <th>Doctor Status</th>
                <td> <?php
                    if ($doctor_info->doc_status == 1) {

                        echo 'Active';
                    } elseif ($doctor_info->doc_status == 2) {
                        echo 'Inactive';
                    }

                    ?></td>

            </tr>


        </table>


        <a href="<?php echo base_url("edit-doctor/$doctor_info->doc_id") ?>"
           class="btn btn-success" title="Edit"><span
                    class="glyphicon glyphicon-edit"></span> Edit</a>
        <a href="<?php echo base_url("delete-doctor/$doctor_info->doc_id") ?>"
           class="btn btn-danger" title="Delete"
           onclick="return confirm('Are you sure want to delete!!')"><span
                    class="glyphicon glyphicon-trash"></span> Delete</a>

        <hr>


    <?php } ?>

    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>


        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa  fa-user-md     fa-5x"></i>
                        </div>

                        <div class="col-xs-9 text-right">

                            <div class="huge"><?php //echo $this->doctor_model->get_all_lists_by_id($this->session->userdata('doc_id'));?></div>
                            <!--                        --><?php //} else { ?>
                                                        <div class="huge">
                            <?php echo $this->db->count_all_results('tbl_doctor'); ?></div>

                            <div>Doctors!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('manage-doctor') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>

    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa  fa-user-md     fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">

                            <div class="huge"><?php

                                $this->db->where('doc_status', 2);
                                $num_rows = $this->db->count_all_results('tbl_doctor');
                                echo $num_rows;

                                ?>
                            </div>

                            <div>Total Pending Doctors!</div>
                        </div>
                    </div>
                </div>

                <a href="<?php echo base_url('doctor/pending_doctor_list') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    <?php } ?>

    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa  fa-hospital-o   fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $this->db->count_all_results('tbl_hospital'); ?></div>
                            <div>Hospitals</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('manage-hospital') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>



    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $this->db->count_all_results('tbl_donor'); ?></div>
                            <div>Blood Donors</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('manage-donor') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>



    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-ambulance   fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $this->db->count_all_results('tbl_ambulance'); ?></div>
                            <div>Total Ambulances!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('manage-ambulance') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>


    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa  fa-user-md     fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $this->db->count_all_results('tbl_appointment'); ?></div>
                            <div>Total Appointments!!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('appointment/manage_appointment') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>


    <?php if (($details->admin_role == "Moderator") || ($details->admin_role == "Patient")) { ?>


    <?php } ?>


    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa  fa-user-md     fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $this->db->count_all_results('tbl_patient'); ?></div>
                            <div>Total Patients!!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('patient/patient_list') ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    <?php } ?>


</div>
<!-- /.row -->

<!-- /.row -->
