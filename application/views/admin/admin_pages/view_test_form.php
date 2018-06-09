<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">

                <h1>Single Test Information</h1>
                <table width="100%" class="table table-striped table-bordered table-hover">


                    <tr>

                        <th>ID</th>
                        <td><?php echo $test_info->test_id ?></td>

                    </tr>

                    <tr>

                        <th>Test Name</th>
                        <td><?php echo $test_info->test_name?></td>

                    </tr>

                    <tr>

                        <th>Doctor Name</th>
                        <td><?php echo $test_info->doc_name?></td>
                    </tr>

                    <tr>

                        <th>Doctor Catgeoy</th>
                        <td><?php echo $test_info->doc_category?></td>

                    </tr>


                    <tr>

                        <th>Test Status</th>

                        <td>
                            <?php

                            if ($test_info->test_status == 1) {

                                echo 'Active';
                            } elseif ($test_info->test_status == 2) {
                                echo 'Inactive';
                            }

                            ?>

                        </td>

                    </tr>


                </table>
            </div>
        </div>
    </div>
</div><?php
/**
 * Created by PhpStorm.
 * User: SAHIM
 * Date: 6/7/2018
 * Time: 2:51 PM
 */