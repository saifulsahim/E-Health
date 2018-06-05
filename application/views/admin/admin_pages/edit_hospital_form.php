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
        <h1 class="page-header">Edit Hospital Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('update-hospital')?>

                        <div class="form-group">
                            <label>Hospital Name</label>
                            <input  type="text" name="hospitalName" value="<?php echo $hospital_info->hospital_name?>" class="form-control" placeholder="Enter Name">
                            <input type="hidden" name="hospitalId" value="<?php echo $hospital_info->hospital_id?>">
                        </div>

                        <div class="form-group">
                            <label>Doctor Name</label>
                            <select name="docName" class="form-control">
                                <option value="">--Select Doctor Name---</option>

                                <?php

                                foreach ($doctor_info as $doctor)

                                    if($hospital_info->doctor_name == $doctor->doc_id)
                                    {

                                ?>
                                <option value="<?php echo $doctor->doc_id?>" selected ><?php echo $doctor->doc_name?></option>

                                <?php } else {?>

                                <option value="<?php echo $doctor->doc_id?>"><?php echo $doctor->doc_name?></option>

                                <?php } ?>

                            </select>


                        </div>


                        <div class="form-group">
                            <label>Doctor Category</label>
                            <select name="docCategory" class="form-control">
                                <option value="">--Select Category---</option>

                                <?php

                                foreach ($doctor_category as $category)
                                    if($hospital_info->doctor_category == $category->doc_id)
                                    {

                                ?>
                                <option value="<?php echo $category->doc_id?>" selected><?php echo $category->doc_category?></option>

                                <?php } else {?>

                                <option value="<?php echo $category->doc_id?>"><?php echo $category->doc_category?></option>
                                <?php } ?>
                            </select>

                        </div>




                        <div class="form-group">
                            <label>Hospital Description</label>
                            <input  type="text" name="hosDesc" value="<?php echo $hospital_info->hospital_desc?>" class="form-control" placeholder="Enter Name">

                        </div>




                        <div class="form-group">
                            <label>Cabin Description</label>
                            <select name="cabDesc" class="form-control">

                                <option value="">--Select Cabin Description---</option>

                                <?php

                                foreach ($cabin_info as $v_cabin)
                                    if($hospital_info->cabin_desc == $v_cabin->cabin_id)
                                    {

                                ?>
                                <option value="<?php echo $v_cabin->cabin_id?>" selected><?php echo $v_cabin->cabin_desc?></option>

                                <?php } else {?>
                                <option value="<?php echo $v_cabin->cabin_id?>"><?php echo $v_cabin->cabin_desc?></option>

                                <?php } ?>
                            </select>

                        </div>


                        <div class="form-group">
                            <label>Cabin Charge</label>
                            <select name="cabCharge" class="form-control">

                                <option value="">--Select Cabin Charge---</option>
                                <?php

                                foreach ($cabin_charge as $v_cabin_charge)
                                    if($hospital_info->cabin_charge == $v_cabin_charge->cabin_id)
                                    {

                                ?>

                                <option value="<?php echo $v_cabin_charge->cabin_id?>" selected><?php echo $v_cabin_charge->cabin_charge?></option>

                                <?php } else {?>


                                <option value="<?php echo $v_cabin_charge->cabin_id?>"><?php echo $v_cabin_charge->cabin_charge?></option>

                                <?php } ?>


                            </select>

                        </div>

                        <div class="form-group">
                            <label>Hospital Contact</label>
                            <input type="text" name="hosContact" value="<?php echo $hospital_info->hospital_contact?>"  class="form-control" placeholder="Enter text">
                        </div>


                        <div class="form-group">
                            <label>Hospital Location</label>
                            <input type="text" name="hosLoc" value="<?php echo $hospital_info->hospital_location?>"  class="form-control" placeholder="Enter text">
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

