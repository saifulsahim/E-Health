<?php
//echo '<pre>';
//print_r($all_admin);
//exit();
//
//?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View All Appointments</h1>
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
                        <th>Appointment ID</th>
                        <th>Patient Name</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Action Buttons</th>


                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($app_data as $v_app) { ?>
                        <tr>
                            <td><?php echo $v_app->appointment_id ?></td>
                            <td><?php echo $v_app->patient_name ?></td>
                            <td><?php echo $v_app->phone_number ?></td>
                            <td><?php echo $v_app->gender ?></td>
                            <td><?php echo $v_app->appointment_date ?></td>
                            <td><?php echo $v_app->appointment_time ?></td>


                            <td>

                                <a href="<?php echo base_url("appointment/edi_appointment/$v_app->appointment_id") ?>"
                                   class="btn btn-success" title="Edit"><span
                                            class="glyphicon glyphicon-edit"></span></a>
                                <a href="<?php echo base_url("appointment/delete_appointment/$v_app->appointment_id") ?>"
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