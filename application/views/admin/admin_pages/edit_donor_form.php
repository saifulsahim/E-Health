<?php
//if(isset($success_message)){
//    echo $success_message;
//}
//?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Blood Donor Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('update-donor')?>

                        <div class="form-group">
                            <label>Donor Name</label>
                            <input  type="text" name="donorName" value="<?php echo $donor_data->donor_name?>" class="form-control" placeholder="Enter Name">
                            <input type="hidden" name="donorId" value="<?php echo $donor_data->donor_id?>" >
                        </div>



                        <div class="form-group">
                            <label>Blood Group</label>
                            <select  name="donorBloodGroup"  class="form-control select2" value="<?php echo $donor_data->donor_blood_group?>">

                                <?php
                                if($donor_data->donor_blood_group == 'A+')
                                {
                                    ?>
                                    <option value="A+" selected>A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>

                               <?php } if($donor_data->donor_blood_group == 'AB+') {
                                    ?>
                                <option value="A+">A+</option>
                                <option value="AB+" selected>AB+</option>
                                <option value="B+">B+</option>
                                <option value="O+">O+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                                <option value="O-">O-</option>


                            <?php } ?>

                                <?php
                                if($donor_data->donor_blood_group == 'O+')
                                {
                                    ?>
                                    <option value="A+">A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+" selected>O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>

                                <?php }
                                if($donor_data->donor_blood_group == 'B+') {
                                    ?>
                                    <option value="A+">A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B+" selected>B+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>


                                <?php }
                                if($donor_data->donor_blood_group == 'A-') {
                                    ?>
                                    <option value="A+">A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-" selected>A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>


                                <?php }
                                if($donor_data->donor_blood_group == 'B-') {
                                    ?>
                                    <option value="A+">A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-" selected>B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-">O-</option>


                                <?php }

                                if($donor_data->donor_blood_group == 'AB-') {
                                    ?>
                                    <option value="A+">A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-"selected>AB-</option>
                                    <option value="O-">O-</option>


                                <?php }

                                if($donor_data->donor_blood_group == 'O-') {
                                    ?>
                                    <option value="A+">A+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B+">B+</option>
                                    <option value="O+">O+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O-" selected>O-</option>


                                <?php }

                                ?>


                            </select>
                        </div>







                        <!--                                <option>A+</option>-->
<!--                                <option>AB+</option>-->
<!--                                <option>B+</option>-->
<!--                                <option>O+</option>-->
<!--                                <option>A-</option>-->
<!--                                <option>B-</option>-->
<!--                                <option>AB-</option>-->
<!--                                <option>O-</option>-->



                        <div class="form-group">
                            <label>Donor Email</label>
                            <input type="email" name="donorEmail" value="<?php echo $donor_data->donor_email?>" class="form-control" placeholder="Enter your mail" required>
                        </div>





                        <div class="form-group">
                            <label>Donor Mobile No</label>
                            <input type="number" name="donorMobileNo" value="<?php echo $donor_data->donor_mobile_no?>"  class="form-control" placeholder="Enter Password">
                        </div>


                        <div class="form-group">
                            <label>Donor Address</label>
                            <input type="text" name="donorAddress" value="<?php echo $donor_data->donor_address?>"  class="form-control" placeholder="Enter text">
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script>
    $(".select2").select2();
</script>
<!-- /.row -->
<!--    </div>-->
<!-- /#page-wrapper -->

