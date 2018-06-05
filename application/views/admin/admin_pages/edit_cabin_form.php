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
        <h1 class="page-header">Edit Cabin Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('update-cabin')?>

                        <div class="form-group">
                            <label>Cabin Capacity</label>
                            <input  type="text" name="cabinCapacity" value="<?php echo $cabin_info->cabin_capacity?>" class="form-control" placeholder="Enter Name">
                            <input type="hidden" name="cabinId" value="<?php echo $cabin_info->cabin_id?>" >
                        </div>






                        <div class="form-group">
                            <label>Cabin Description</label>
                            <input type="text" name="cabinDesc" value="<?php echo $cabin_info->cabin_desc?>"  class="form-control" placeholder="Enter Password">
                        </div>


                        <div class="form-group">
                            <label>Cabin Charge</label>
                            <input type="text" name="cabinCharge" value="<?php echo $cabin_info->cabin_charge?>"  class="form-control" placeholder="Enter text">
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

