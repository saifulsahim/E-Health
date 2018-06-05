<?php
if(isset($success_message)){
    echo $success_message;
}
?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Admin Register Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
<!--                        <form role="form">-->
                        <?php echo form_open('admin/register_new_admin')?>

                            <div class="form-group">
                                <label>Admin Name</label>
                                <input  type="text" name="adminName" value="<?php echo set_value('adminName')?>" class="form-control" placeholder="Enter Name">
                            </div>

                            <?php echo form_error('adminName')?>

                            <div class="form-group">
                                <label>Admin Email</label>
                                <input type="email" name="adminEmail" value="<?php echo set_value('adminEmail')?>" class="form-control" placeholder="Enter your mail" required>
                            </div>

                        <?php echo form_error('adminEmail')?>
                            <div class="form-group">
                                <label>Admin Password</label>
                                <input type="password" name="adminPassword"  class="form-control" placeholder="Enter Password">
                            </div>


                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirmPassword"  class="form-control" placeholder="Enter text">
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

