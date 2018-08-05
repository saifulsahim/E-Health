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
        <h1 class="page-header">Edit Patient Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('patient/update_patient')?>

                        <div class="form-group">
                            <label>Patient Name</label>
                            <input  type="text" name="patientName" value="<?php echo $patient_info->patient_name?>" class="form-control" placeholder="Enter Name">
                            <input type="hidden" name="patientId" value="<?php echo $patient_info->patient_id?>" >
                        </div>






                        <div class="form-group">
                            <label>Patient Email</label>
                            <input type="text" name="patientEmail" value="<?php echo $patient_info->email_address?>"  class="form-control" placeholder="Enter Password">
                        </div>


                        <div class="form-group">
                            <label>Patient Mobile No</label>
                            <input type="text" name="patientMobileNo" value="<?php echo $patient_info->mobile_no?>"  class="form-control" placeholder="Enter text">
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>

                        <?php echo form_close()?>
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

