<?php


$message = $this->session->message;

if (isset($message)) {

    echo $message;
    $this->session->unset_userdata('message');
}

?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Cabin Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('save-cabin')?>



                        <div class="form-group">
                            <label>Cabin Capacity</label>
                            <input type="text" name="cabinCapacity"  class="form-control" placeholder="Enter Capacity" required>
                        </div>



                        <div class="form-group">
                            <label>Cabin Description</label>
                            <textarea name="cabinDesc" rows="2" class="form-control"></textarea>
                        </div>



                        <div class="form-group">
                            <label>Cabin Charge</label>
                            <input type="text" name="cabinCharge"  class="form-control" placeholder="Enter Charge" required>
                        </div>



                        <button type="submit" class="btn btn-primary">Submit Button</button>

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

