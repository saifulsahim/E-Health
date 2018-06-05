<?php
if(isset($success_message)){
    echo $success_message;
}
?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Blood Donor Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('save-donor')?>

                        <div class="form-group">
                            <label>Donor Name</label>
                            <input  type="text" name="donorName" value="<?php echo set_value('donorName')?>" class="form-control" placeholder="Enter Name">
                        </div>

                        <?php echo form_error('donorName')?>


                        <div class="form-group">
                            <label>Blood Group</label>
                            <select name="donorBloodGroup"  class="form-control">
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O+</option>
                                <option>A-</option>
                                <option>B-</option>
                                <option>AB-</option>
                                <option>O-</option>
                            </select>
                        </div>




                        <div class="form-group">
                            <label>Donor Email</label>
                            <input type="email" name="donorEmail" value="<?php echo set_value('donorEmail')?>" class="form-control" placeholder="Enter your mail" required>
                        </div>




                        <?php echo form_error('donorEmail')?>
                        <div class="form-group">
                            <label>Donor Mobile No</label>
                            <input type="number" name="donorMobileNo"  class="form-control" placeholder="Enter Mobile No">
                        </div>


                        <div class="form-group">
                            <label>Donor Address</label>
                            <input type="text" name="donorAddress"  class="form-control" placeholder="Enter Address">
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

