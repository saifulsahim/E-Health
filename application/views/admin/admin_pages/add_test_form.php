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
        <h1 class="page-header">Test Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('save-test') ?>

                        <div class="form-group">
                            <label>Test Name</label>
                            <input type="text" name="testName" class="form-control" placeholder="Enter Name">
                        </div>


<!--                        <div class="form-group">-->
<!--                            <label>Doctor Image</label>-->
<!--                            <select name="docImage" class="form-control">-->
<!--                                <option>Select Doctor Image</option>-->
<!---->
<!--                                --><?php
//                                foreach ($doctor_image as $doctor) {
//
//                                    ?>
<!--                                    <option value="--><?php //echo $doctor->doc_image; ?><!--">--><?php //echo $doctor->doc_image ?>
<!--                                    </option>-->
<!--                                --><?php //} ?>
<!--                            </select>-->
<!--                        </div>-->


                        <div class="form-group">
                            <label>Doctor Name</label>
                            <select name="docName" class="form-control select2">
                                <option>Select Doctor Name</option>

                                <?php
                                foreach ($doctor_data as $doctor) {

                                    ?>
                                    <option value="<?php echo $doctor->doc_id ?>"><?php echo $doctor->doc_name ?></option>

                                <?php } ?>
                            </select>
                        </div>


<!--                        <div class="form-group">-->
<!--                            <label>Doctor Name</label>-->
<!--                            <select name="docCategory" class="form-control">-->
<!--                                <option>Select Doctor Category</option>-->
<!---->
<!--                                --><?php
//                                foreach ($doctor_category as $doctor) {
//
//                                    ?>
<!--                                    <option value="--><?php //echo $doctor->doc_id ?><!--">--><?php //echo $doctor->doc_category ?><!--</option>-->
<!---->
<!--                                --><?php //} ?>
<!--                            </select>-->
<!--                        </div>-->


                        <div class="form-group">
                            <label>Test Price</label>
                            <input type="text" name="testPrice" class="form-control" placeholder="Enter Price" required>
                        </div>


                        <div class="form-group">
                            <label>Test Description</label>
                            <textarea name="testDesc" rows="2" class="form-control"></textarea>
                        </div>


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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<script>
    $(".select2").select2();
</script>
<!-- /.row -->
<!--    </div>-->
<!-- /#page-wrapper -->

