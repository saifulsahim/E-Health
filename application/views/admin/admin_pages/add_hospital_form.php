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
        <h1 class="page-header">Hospital Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('save-hospital')?>

                        <div class="form-group">
                            <label>Hospital Name</label>
                            <input  type="text" name="hospitalName"  class="form-control" placeholder="Enter Name">
                        </div>




                        <div class="form-group">
                            <label>Doctor Image</label>
                            <select name="docImage"  class="form-control">
                                <option>Select Doctor Image</option>

                                <?php
                                foreach ($doctor_image as $doctor)
                                {

                                    ?>
                                    <option value="<?php echo $doctor->doc_image?>"><?php echo $doctor->doc_image?>

                                    </option>
                                <?php } ?>
                            </select>
                        </div>



                        <div class="form-group">
                            <label>Doctor Name</label>
                            <select name="docName"  class="form-control">
                                <option>Select Doctor Name</option>

                                <?php foreach ($doctor_info as $doctor) { ?>

                                    <option value="<?php echo $doctor->doc_id ?>"><?php echo $doctor->doc_name; ?></option>


                                <?php } ?>

                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Doctor Category</label>
                            <select name="docCategory"  class="form-control">
                                <option>Select Doctor Category</option>

                                <?php foreach ($doctor_category as $category) { ?>

                                    <option value="<?php echo $category->doc_id ?>"><?php echo $category->doc_category; ?></option>


                                <?php } ?>

                                ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label>Hospital Description</label>
                            <textarea name="hosDesc" rows="2" class="form-control"></textarea>
                        </div>



                        <div class="form-group">
                            <label>Cabin Description</label>
                            <select name="cabDesc"  class="form-control">
                                <option>Select Cabin Description</option>

                                <?php foreach ($cabin_info as $cabin) { ?>
                                <option value="<?php echo $cabin->cabin_id?>"><?php echo $cabin->cabin_desc?></option>

                                <?php } ?>

                            </select>
                        </div>


                        <div class="form-group">
                            <label>Cabin Charge</label>
                            <select name="cabCharge"  class="form-control">
                                <option>Select Cabin Charge</option>

                                <?php foreach ($cabin_charge as $charge) { ?>

                                <option value="<?php echo $charge->cabin_id?>"><?php echo $charge->cabin_charge?></option>

                                <?php } ?>

                            </select>

                        </div>


                        <div class="form-group">
                            <label>Hospital Contact</label>
                            <input type="text" name="hosContact"  class="form-control" placeholder="Enter Mobile No">
                        </div>


                        <div class="form-group">
                            <label>Hospital Location</label>
                            <textarea name="hosLoc" rows="2" class="form-control"></textarea>
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

