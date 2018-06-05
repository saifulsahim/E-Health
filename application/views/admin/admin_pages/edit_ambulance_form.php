<?php
//if(isset($success_message)){
//    echo $success_message;
//}
//?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Ambulance Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('update-ambulance')?>

                        <div class="form-group">
                            <label>Ambulance Name</label>
                            <input  type="text" name="ambName" value="<?php echo $amb_data->amb_name?>" class="form-control" placeholder="Enter Name">
                            <input type="hidden" name="ambId" value="<?php echo $amb_data->amb_id?>" >
                        </div>






                        <div class="form-group">
                            <label>Amb Location</label>
                            <input type="number" name="ambMobileNo" value="<?php echo $amb_data->amb_contact?>"  class="form-control" placeholder="Enter Password">
                        </div>


                        <div class="form-group">
                            <label>Amb Address</label>
                            <input type="text" name="ambLoc" value="<?php echo $amb_data->amb_loc?>"  class="form-control" placeholder="Enter text">
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

