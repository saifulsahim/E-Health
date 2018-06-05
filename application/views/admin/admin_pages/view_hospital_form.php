<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">

                <h1>Single Hospital Information</h1>
                <table width="100%" class="table table-striped table-bordered table-hover">


                    <tr>

                        <th>ID</th>
                        <td><?php echo $hospital_info->hospital_id ?></td>

                    </tr>

                    <tr>

                        <th>Doctor Name</th>
                        <td><?php echo $hospital_info->hospital_name ?></td>

                    </tr>

                    <tr>

                        <th>Doctor Name</th>
                        <td><?php echo $hospital_info->doctor_name?></td>
                    </tr>

                    <tr>

                        <th>Doctor Category</th>
                        <td><?php echo $hospital_info->doctor_category?></td>

                    </tr>

                    <tr>

                        <th>Hospital Description</th>
                        <td><?php echo $hospital_info->hospital_desc?></td>

                    </tr>

                    <tr>

                        <th>Cabin Description</th>
                        <td><?php echo $hospital_info->cabin_desc?></td>

                    </tr>


                    <tr>

                        <th>Cabin Charge</th>
                        <td><?php echo $hospital_info->cabin_charge?></td>

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