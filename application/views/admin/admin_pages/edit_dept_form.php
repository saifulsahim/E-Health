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
        <h1 class="page-header">Edit Department Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('update-dept')?>

                        <div class="form-group">
                            <label>Department Name</label>
                            <input  type="text" name="deptName" value="<?php echo $dept_data->dept_name?>" class="form-control" placeholder="Enter Name">
                            <input type="hidden" name="deptId" value="<?php echo $dept_data->dept_id?>" >
                        </div>





                        <div class="form-group">
                            <label>Department Description</label>
                            <textarea name="deptDesc" rows="2" class="form-control"><?php echo $dept_data->dept_desc?></textarea>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script>
    $(".select2").select2();
</script>
<!-- /.row -->
<!--    </div>-->
<!-- /#page-wrapper -->

