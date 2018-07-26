<?php


$message = $this->session->userdata('message');

if (isset($message)) {

    echo $message;
    $this->session->unset_userdata('message');
}
//$image = $this->doctor_model->get_doctor_record_for_image($test_info->doc_image);
?>

<?php //echo validation_errors()?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Test Form</h1>
        </div>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <!--                        <form role="form">-->
                            <?php echo form_open('update-test')?>

                            <div class="form-group">
                                <label>Test Name</label>
                                <input  type="text" name="testName" value="<?php echo $test_info->test_name?>" class="form-control" placeholder="Enter Name">
                                <input type="hidden" name="testId" value="<?php echo $test_info->test_id?>" >
                            </div>






<!--                            <div class="form-group">-->
<!--                                <label>Doctor Image</label>-->
<!--                                <input type="file" name="docImage" value="" class="form-control input-file uniform_on" id="fileInput">-->
<!--                                <input type="hidden" name="docOldImage" class="input-file uniform_on" id="fileInput" value="--><?php //echo $test_info->doc_image?><!--">-->
<!--                                <img src="--><?php //echo base_url().$test_info->doc_image?><!--" width="50px" height="50px">-->
<!--                            </div>-->
<!---->
<!---->
<!---->
                            <div class="form-group">
                                <label>Doctor Name</label>
                                <select name="docName" class="form-control">

                                    <option value="">--Select Doctor Name---</option>

                                    <?php

                                    foreach ($doctor_info as $v_doctor)
                                        if($test_info->doc_id == $v_doctor->doc_id)
                                        {

                                            ?>
                                            <option value="<?php echo $v_doctor->doc_id?>" selected><?php echo $v_doctor->doc_name?></option>

                                        <?php } else {?>
                                            <option value="<?php echo $v_doctor->doc_id?>"><?php echo $v_doctor->doc_name?></option>

                                        <?php } ?>
                                </select>

                            </div>
<!---->
<!---->
<!---->
<!---->
<!--                            <div class="form-group">-->
<!--                                <label>Doctor Category</label>-->
<!--                                <select name="docCategory" class="form-control">-->
<!---->
<!--                                    <option value="">--Select Doctor Category---</option>-->
<!---->
<!--                                    --><?php
//
//                                    foreach ($doctor_category as $v_category)
//                                        if($test_info->doc_category == $v_category->doc_id)
//                                        {
//
//                                            ?>
<!--                                            <option value="--><?php //echo $v_category->doc_id?><!--" selected>--><?php //echo $v_category->doc_category?><!--</option>-->
<!---->
<!--                                        --><?php //} else {?>
<!--                                            <option value="--><?php //echo $v_category->doc_id?><!--">--><?php //echo $v_category->doc_category?><!--</option>-->
<!---->
<!--                                        --><?php //} ?>
<!--                                </select>-->
<!---->
<!--                            </div>-->



                            <div class="form-group">
                                <label>Test Price</label>
                                <input type="text" name="testPrice" value="<?php echo $test_info->test_price?>"  class="form-control" placeholder="Enter text">
                            </div>



                            <div class="form-group">
                                <label>Test Description</label>
                                <input type="text" name="testDesc" value="<?php echo $test_info->test_desc?>"  class="form-control" placeholder="Enter Password">
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

<?php
/**
 * Created by PhpStorm.
 * User: SAHIM
 * Date: 6/7/2018
 * Time: 2:58 PM
 */