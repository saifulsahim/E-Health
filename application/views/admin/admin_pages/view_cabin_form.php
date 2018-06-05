<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">

                <h1>Single Cabin Information</h1>
                <table width="100%" class="table table-striped table-bordered table-hover">


                    <tr>

                        <th>ID</th>
                        <td><?php echo $cabin_info->cabin_id ?></td>

                    </tr>

                    <tr>

                        <th>Cabin Capacity</th>
                        <td><?php echo $cabin_info->cabin_capacity ?></td>

                    </tr>

                    <tr>

                        <th>Cabin Description</th>
                        <td><?php echo $cabin_info->cabin_desc ?></td>
                    </tr>

                    <tr>

                        <th>Cabin Charge</th>
                        <td><?php echo $cabin_info->cabin_charge ?></td>

                    </tr>


                    <tr>

                        <th>Cabin Status</th>

                        <td>
                            <?php

                            if ($cabin_info->cabin_status == 1) {

                                echo 'Active';
                            } elseif ($cabin_info->cabin_status == 2) {
                                echo 'Inactive';
                            }

                            ?>

                        </td>

                    </tr>


                </table>
            </div>
        </div>
    </div>
</div>