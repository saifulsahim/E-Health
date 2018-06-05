<?php


$message = $this->session->message;

if (isset($message)) {

    echo $message;
    $this->session->unset_userdata('message');
}

?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Doctor Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open_multipart('save-doctor')?>

                        <div class="form-group">
                            <label>Doctor Name</label>
                            <input  type="text" name="docName"  class="form-control" placeholder="Enter Name">
                        </div>




                        <div class="form-group">
                            <label>Donor Image</label>
                            <input type="file" class="form-control" name="docImage" value="" class="input-file uniform_on" id="fileInput">
                        </div>




                        <?php echo form_error('docEmail')?>
                        <div class="form-group">
                            <label>Doctor Email</label>
                            <input type="email" name="docEmail"  class="form-control" placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label>Doctor Mobile No</label>
                            <input type="text" name="docMobileNo"  class="form-control" placeholder="Enter Mobile No">
                        </div>


                        <div class="form-group">
                            <label>Doctor Qualification</label>
                            <input type="text" name="docQual"  class="form-control" placeholder="Enter Specialist">
                        </div>



                        <div class="form-group">
                            <label>Doctor Designation</label>
                            <input type="text" name="docDesignation"  class="form-control" placeholder="Enter Designation">
                        </div>


                        <div class="form-group">
                            <label>Doctor Category</label>
                            <select name="docCategory"  class="form-control">
                                <option>Orthopedics</option>
                                <option>Medicine</option>
                                <option>Neurology</option>
                                <option>Cardiology</option>
                                <option>Dermatology</option>
                                <option>Pathology</option>
                                <option>Psychiatrist</option>
                                <option>Neurosurgeon</option>
                                <option>Dental</option>

                            </select>
                        </div>


                        <div class="form-group">
                            <label>Doctor Chamber</label>
                            <input type="text" name="docChamber"  class="form-control" placeholder="Enter Chamber Location">
                        </div>


                        <div class="form-group">
                            <label>Birth Date</label>
                            <input  type="text" name="docBirthDate" placeholder="yyyy-mm-dd"  class="form-control datepicker">
                        </div>


                        <div class="form-group">
                            <label>Join Date</label>
                            <input type="text"  name="docJoinDate"  class="form-control datepicker" placeholder="yyyy-mm-dd">
                        </div>



                        <div class="form-group">
                            <label>Doctor Fees</label>
                            <input type="text" name="docFees"  class="form-control" placeholder="Enter Fees">
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

<!--<script>-->
<!--    $(function () {-->
<!--        $("#birthday").datepicker({dateFormat: 'yy-mm-dd'});-->
<!--    });-->
<!--</script>-->