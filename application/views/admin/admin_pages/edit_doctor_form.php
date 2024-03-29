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
        <h1 class="page-header">Edit Doctor Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open_multipart('update-doctor')?>

                        <div class="form-group">
                            <label>Doctor Name</label>
                            <input  type="text" name="docName" value="<?php echo $doctor_data->doc_name?>" class="form-control" placeholder="Enter Name">
                            <input type="hidden" name="docId" value="<?php echo $doctor_data->doc_id?>">
                        </div>


                        <div class="form-group">
                            <label>Doctor Image</label>
                            <input type="file" name="docImage" value="" class="form-control input-file uniform_on" id="fileInput">
                            <input type="hidden" name="docOldImage" class="input-file uniform_on" id="fileInput" value="<?php echo $doctor_data->doc_image?>">
                        <img src="<?php echo base_url().$doctor_data->doc_image?>" width="50" height="50">
                        </div>


                        <div class="form-group">
                            <label>Doctor Email</label>
                            <input type="email" name="docEmail" value="<?php echo $doctor_data->doc_email?>" class="form-control" placeholder="Enter your mail" required>
                        </div>


                        <div class="form-group">
                            <label>Doctor Mobile No</label>
                            <input type="number" name="docMobileNo" value="<?php echo $doctor_data->doc_mobile_no?>"  class="form-control" placeholder="Enter Password">
                        </div>


                        <div class="form-group">
                            <label>Doctor Qualification</label>
                            <input type="text" name="docQual" value="<?php echo $doctor_data->doc_qualification?>"  class="form-control" placeholder="Enter Password">
                        </div>


                        <div class="form-group">
                            <label>Doctor Designation</label>
                            <input type="text" name="docDesignation" value="<?php echo $doctor_data->doc_designation?>"  class="form-control" placeholder="Enter Password">
                        </div>

<!--                        <div class="form-group">-->
<!--                            <label>Doctor Category</label>-->
<!--                            <select  name="docCategory"  class="form-control" value="--><?php //echo $doctor_data->doc_category?><!--">-->
<!--                            </select>-->
<!--                        </div>-->

                        <div class="form-group">
                            <label>Doctor Category</label>
                            <select class="form-control select2" name="docCategory" id="selectError3">

                                <option value="">--Select Category---</option>


                                <?php
                                foreach ($dept_info as $dept)
                                    if($doctor_data->doc_category == $dept->dept_id)
                                    { ?>

                                        <option value="<?php echo $dept->dept_id ?>" selected><?php echo $dept->dept_name; ?></option>


                                    <?php } else {?>
                                        <option value="<?php echo $dept->dept_id ?>"><?php echo $dept->dept_name; ?></option>


                                    <?php }  ?>
                            </select>
                        </div>



                        <div class="form-group">
                            <label>Hospital Name</label>
                            <select class="form-control select2" name="hosName" id="selectError3">

                                <option value="">--Select Hospital Name---</option>


                                <?php
                                foreach ($hospital_info as $hospital)
                                    if($doctor_data->hospital_id == $hospital->hospital_id)
                                    { ?>

                                        <option value="<?php echo $hospital->hospital_id ?>" selected><?php echo $hospital->hospital_name; ?></option>


                                    <?php } else {?>
                                        <option value="<?php echo $hospital->hospital_id ?>"><?php echo $hospital->hospital_name; ?></option>


                                    <?php }  ?>
                            </select>
                        </div>


                        <!--                                    <option value="Orthopedics">Orthopedics</option>-->
<!--                                    <option value="Medicine">Medicine</option>-->
<!--                                    <option value="Neurology">Neurology</option>-->
<!--                                    <option value="Cardiology">Cardiology</option>-->
<!--                                    <option value="Dermatology">Dermatology</option>-->
<!--                                    <option value="Pathology">Pathology</option>-->
<!--                                    <option value="Psychiatrist">Psychiatrist</option>-->
<!--                                    <option value="Neurosurgeon">Neurosurgeon</option>-->
<!--                                    <option value="Dental">Dental</option>-->



                        <div class="form-group">
                            <label>Symptomps</label>
                            <input type="text" name="symptoms" placeholder="Enter Symptoms" value="<?php echo $doctor_data->symptoms?>"
                                   class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Disease</label>
                            <input type="text" name="disease" placeholder="Enter Disease" value="<?php echo $doctor_data->disease?>"
                                   class="form-control">
                        </div>


<!--                        <div class="form-group">-->
<!--                            <label>Doctor Chamber</label>-->
<!--                            <input type="text" name="docChamber" value="--><?php //echo $doctor_data->doc_chamber?><!--"  class="form-control" placeholder="Enter Chamber">-->
<!--                        </div>-->

                        <div class="form-group">
                            <label>Doctor Birth Date</label>
                            <input type="text" name="docBirthDate" value="<?php echo $doctor_data->doc_birth_date?>"  class="form-control datepicker" placeholder="Enter Birth Date">
                        </div>

                        <div class="form-group">
                            <label>Doctor Join Date</label>
                            <input type="text" name="docJoinDate" value="<?php echo $doctor_data->doc_join_date?>"  class="form-control datepicker" placeholder="Enter Join Date">
                        </div>

                        <div class="form-group">
                            <label>Doctor Fees</label>
                            <input type="text" name="docFees" value="<?php echo $doctor_data->doc_fee?>"  class="form-control" placeholder="Enter Chamber">
                        </div>












<!---->
<!--                        <div class="form-group">-->
<!--                            <label>doctor Address</label>-->
<!--                            <input type="text" name="doctorAddress" value="--><?php //echo $doctor_data->doctor_address?><!--"  class="form-control" placeholder="Enter text">-->
<!--                        </div>-->


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

    <?php
//                                if($doctor_data->doctor_blood_group == 'A+')
//                                {
//                                    ?>
    <!--                                    <option value="A+" selected>A+</option>-->
    <!--                                    <option value="AB+">AB+</option>-->
    <!--                                    <option value="B+">B+</option>-->
    <!--                                    <option value="O+">O+</option>-->
    <!--                                    <option value="A-">A-</option>-->
    <!--                                    <option value="B-">B-</option>-->
    <!--                                    <option value="AB-">AB-</option>-->
    <!--                                    <option value="O-">O-</option>-->
    <!---->
    <!--                                --><?php //} if($doctor_data->doctor_blood_group == 'AB+') {
//                                    ?>
    <!--                                    <option value="A+">A+</option>-->
    <!--                                    <option value="AB+" selected>AB+</option>-->
    <!--                                    <option value="B+">B+</option>-->
    <!--                                    <option value="O+">O+</option>-->
    <!--                                    <option value="A-">A-</option>-->
    <!--                                    <option value="B-">B-</option>-->
    <!--                                    <option value="AB-">AB-</option>-->
    <!--                                    <option value="O-">O-</option>-->
    <!---->
    <!---->
    <!--                                --><?php //} ?>
    <!---->
    <!--                                --><?php
//                                if($doctor_data->doctor_blood_group == 'O+')
//                                {
//                                    ?>
    <!--                                    <option value="A+">A+</option>-->
    <!--                                    <option value="AB+">AB+</option>-->
    <!--                                    <option value="B+">B+</option>-->
    <!--                                    <option value="O+" selected>O+</option>-->
    <!--                                    <option value="A-">A-</option>-->
    <!--                                    <option value="B-">B-</option>-->
    <!--                                    <option value="AB-">AB-</option>-->
    <!--                                    <option value="O-">O-</option>-->
    <!---->
    <!--                                --><?php //}
//                                if($doctor_data->doctor_blood_group == 'B+') {
//                                    ?>
    <!--                                    <option value="A+">A+</option>-->
    <!--                                    <option value="AB+">AB+</option>-->
    <!--                                    <option value="B+" selected>B+</option>-->
    <!--                                    <option value="O+">O+</option>-->
    <!--                                    <option value="A-">A-</option>-->
    <!--                                    <option value="B-">B-</option>-->
    <!--                                    <option value="AB-">AB-</option>-->
    <!--                                    <option value="O-">O-</option>-->
    <!---->
    <!---->
    <!--                                --><?php //}
//                                if($doctor_data->doctor_blood_group == 'A-') {
//                                    ?>
    <!--                                    <option value="A+">A+</option>-->
    <!--                                    <option value="AB+">AB+</option>-->
    <!--                                    <option value="B+">B+</option>-->
    <!--                                    <option value="O+">O+</option>-->
    <!--                                    <option value="A-" selected>A-</option>-->
    <!--                                    <option value="B-">B-</option>-->
    <!--                                    <option value="AB-">AB-</option>-->
    <!--                                    <option value="O-">O-</option>-->
    <!---->
    <!---->
    <!--                                --><?php //}
//                                if($doctor_data->doctor_blood_group == 'B-') {
//                                    ?>
    <!--                                    <option value="A+">A+</option>-->
    <!--                                    <option value="AB+">AB+</option>-->
    <!--                                    <option value="B+">B+</option>-->
    <!--                                    <option value="O+">O+</option>-->
    <!--                                    <option value="A-">A-</option>-->
    <!--                                    <option value="B-" selected>B-</option>-->
    <!--                                    <option value="AB-">AB-</option>-->
    <!--                                    <option value="O-">O-</option>-->
    <!---->
    <!---->
    <!--                                --><?php //}
//
//                                if($doctor_data->doctor_blood_group == 'AB-') {
//                                    ?>
    <!--                                    <option value="A+">A+</option>-->
    <!--                                    <option value="AB+">AB+</option>-->
    <!--                                    <option value="B+">B+</option>-->
    <!--                                    <option value="O+">O+</option>-->
    <!--                                    <option value="A-">A-</option>-->
    <!--                                    <option value="B-">B-</option>-->
    <!--                                    <option value="AB-"selected>AB-</option>-->
    <!--                                    <option value="O-">O-</option>-->
    <!---->
    <!---->
    <!--                                --><?php //}
//
//                                if($doctor_data->doctor_blood_group == 'O-') {
//                                    ?>
    <!--                                    <option value="A+">A+</option>-->
    <!--                                    <option value="AB+">AB+</option>-->
    <!--                                    <option value="B+">B+</option>-->
    <!--                                    <option value="O+">O+</option>-->
    <!--                                    <option value="A-">A-</option>-->
    <!--                                    <option value="B-">B-</option>-->
    <!--                                    <option value="AB-">AB-</option>-->
    <!--                                    <option value="O-" selected>O-</option>-->
    <!---->
    <!---->
    <!--                                --><?php //}
//
//                                ?>