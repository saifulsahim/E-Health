<?php


$message = $this->session->userdata('message');

if (isset($message)) {

    echo $message;
    $this->session->unset_userdata('message');
}

?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Appointment Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('appointment/update_appointment') ?>

                        <div class="form-group">
                            <label>Patient Name</label>
                            <input type="text" name="patientName" value="<?php echo $app_data->patient_name ?>"
                                   class="form-control" placeholder="Enter Name">
                            <input type="hidden" name="appId" value="<?php echo $app_data->appointment_id ?>">
                        </div>


                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" name="phoneNo" value="<?php echo $app_data->phone_number ?>"
                                   class="form-control" placeholder="Enter Password">
                        </div>

                        <div class="form-group">
                            <select class="form-control select2" name="appGender"
                                    value="<?php echo $app_data->gender ?>">
                                <option>Select Gender</option>
                                <?php
                                if ($app_data->gender == 'Male') {
                                    ?>
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                <?php } else { ?>
                                    <option value="Male">Male</option>
                                    <option value="Female" selected>Female</option>
                                <?php } ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Appointment Date</label>
                            <input type="text" name="appDate" value="<?php echo $app_data->appointment_date ?>"
                                   class="form-control datepicker" placeholder="Enter Join Date">
                        </div>

                        <div class="form-group">
                            <label>Appointment Time</label>
                            <input type="text" name="appTime" value="<?php echo $app_data->appointment_time ?>"
                                   class="form-control timepicker" placeholder="Enter Join Date">
                        </div>

                        <input type="hidden" name="docId" value="<?=$app_data->doc_id;?>">


                        <button type="submit" class="btn btn-primary">Submit</button>

                        <?php echo form_close() ?>
                    </div>
                    <!-- /.col-lg-6 (nested) -->

                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!--    </div>-->
<!-- /#page-wrapper -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<script>
    $(".select2").select2();
</script>
