<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">

                <h1>Single Hospital Information</h1>
                <table width="100%" class="table table-striped table-bordered table-hover">


                    <?php

                    $doctor = $this->doctor_model->view_doctor_details($hospital_info->doctor_name);
                    $cabin= $this->cabin_model->view_cabin($hospital_info->cabin_desc);
                    //$image = $this->doctor_model->get_doctor_record_for_image($hospital_info->doc_image);
                    //print_r($image);

                    ?>


                    <tr>

                        <th>ID</th>
                        <td><?php echo $hospital_info->hospital_id ?></td>

                    </tr>

                    <tr>

                        <th>Hospital Name</th>
                        <td><?php echo $hospital_info->hospital_name ?></td>

                    </tr>



                    <th>Doctor Image</th>
                    <?php if($hospital_info->doc_image != ''){?>
                        <td><img src="<?php echo base_url("$hospital_info->doc_image");?>" width="30px" height="30px"></td>
                    <?php } else {?>
                        <td></td>
                    <?php } ?>



                    <tr>

                        <th>Doctor Name</th>
                        <td><?php echo $doctor->doc_name?></td>
                    </tr>

                    <tr>

                        <th>Doctor Category</th>
                        <td><?php echo $doctor->doc_category?></td>

                    </tr>

                    <tr>

                        <th>Hospital Description</th>
                        <td><?php echo $hospital_info->hospital_desc?></td>

                    </tr>

                    <tr>

                        <th>Cabin Description</th>
                        <td><?php echo $cabin->cabin_desc?></td>

                    </tr>


                    <tr>

                        <th>Cabin Charge</th>
                        <td><?php echo $cabin->cabin_charge?></td>

                    </tr>

                    <tr>

                        <th>Hospital Contact</th>
                        <td><?php echo $hospital_info->hospital_contact?></td>

                    </tr>

                    <tr>

                        <th>Hospital Location</th>
                        <td><?php echo $hospital_info->hospital_location?></td>

                    </tr>


                    <tr>

                        <th>Hospital Status</th>
                        <td> <?php
                            if($hospital_info->hospital_status ==1){

                                echo 'Active';
                            }
                            elseif($hospital_info->hospital_status ==2){
                                echo 'Inactive';
                            }

                            ?></td>

                    </tr>


                </table>
            </div>
        </div>
    </div>
</div>