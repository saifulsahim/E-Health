<?php
if(isset($success_message)){
    echo $success_message;
}
?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Ambulance Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('save-ambulance')?>

                        <div class="form-group">
                            <label>Ambulance Name</label>
                            <input  type="text" name="ambName" value="" class="form-control" placeholder="Enter Name">
                        </div>





                        <div class="form-group">
                            <label>Ambulance Contact Number</label>
                            <input type="text" name="ambMobileNo" value="" class="form-control" placeholder="Enter Mobile No" required>
                        </div>




                        <div class="form-group">
                            <label>Ambulance Location</label>
                            <textarea name="ambLoc" rows="2" class="form-control"></textarea>
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

