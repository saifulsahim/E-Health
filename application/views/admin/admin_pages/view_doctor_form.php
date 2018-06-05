<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">

                <h1>Single Doctor Information</h1>
                <table width="100%" class="table table-striped table-bordered table-hover">


                    <tr>

                        <th>ID</th>
                        <td><?php echo $doctor_info->doc_id ?></td>

                    </tr>

                    <tr>

                        <th>Doctor Name</th>
                        <td><?php echo $doctor_info->doc_name ?></td>

                    </tr>

                    <tr>

                        <th>Doctor Image</th>
                        <td><img src="<?php echo base_url() . $doctor_info->doc_image ?>" width="100" height="100"></td>
                    </tr>

                    <tr>

                        <th>Doctor E-mail</th>
                        <td><?php echo $doctor_info->doc_email ?></td>

                    </tr>

                    <tr>

                        <th>Mobile No</th>
                        <td><?php echo $doctor_info->doc_mobile_no ?></td>

                    </tr>

                    <tr>

                        <th>Doctor Qualification</th>
                        <td><?php echo $doctor_info->doc_qualification?></td>

                    </tr>


                    <tr>

                        <th>Doctor Designation</th>
                        <td><?php echo $doctor_info->doc_designation?></td>

                    </tr>

                    <tr>

                        <th>Doctor Category</th>
                        <td><?php echo $doctor_info->doc_category?></td>

                    </tr>

                    <tr>

                        <th>Doctor Chamber</th>
                        <td><?php echo $doctor_info->doc_chamber?></td>

                    </tr>

                    <tr>

                        <th>Birth Date</th>
                        <td><?php echo $doctor_info->doc_birth_date?></td>

                    </tr>


                    <tr>

                        <th>Join Date</th>
                        <td><?php echo $doctor_info->doc_join_date?></td>

                    </tr>


                    <tr>

                        <th>Doctor Fees</th>
                        <td><?php echo $doctor_info->doc_fee?></td>

                    </tr>


                    <tr>

                        <th>Doctor Status</th>
                        <td> <?php
                            if($doctor_info->doc_status ==1){

                                echo 'Active';
                            }
                            elseif($doctor_info->doc_status ==2){
                                echo 'Inactive';
                            }

                            ?></td>

                    </tr>


                </table>
            </div>
        </div>
    </div>
</div>