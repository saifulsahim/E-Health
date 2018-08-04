<?php
//echo '<pre>';
//print_r($all_admin);
//exit();
//
//?>

    <style>
        .my-rating {

        }
    </style>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">View All Appointments</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!--            <div class="panel-heading">-->
                <!--                DataTables Advanced Tables-->
                <!--            </div>-->
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Appointment Serial</th>
                            <th>Doctor Name</th>

                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Action Buttons</th>


                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $i = 1;
                        foreach ($app_data as $v_app) {


                            $doc_name = $this->doctor_model->get_doctor_record_for_image($v_app->doc_id);

                            ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td>
                                    <?php echo $doc_name->doc_name ?>
                                    <div>
                                        <?php
                                        $rating = number_format($this->appointment_model->get_rating_value($v_app->doc_id), 1);
                                        ?>
                                        <span class="my-rating" data-rating="<?= $rating?>"
                                              data-doc-id="<?= $v_app->doc_id ?>"></span>
                                        <span class="live-rating<?= $v_app->doc_id ?>">
                                            <?= $rating ?>
                                        </span>
                                    </div>
                                </td>
                                <td><?php echo $v_app->appointment_date ?></td>
                                <td><?php echo date('h:i A', strtotime($v_app->appointment_time)) ?></td>


                                <td>

                                    <a href="<?php echo base_url("appointment/edi_appointment/$v_app->appointment_id") ?>"
                                       class="btn btn-success" title="Edit"><span
                                                class="glyphicon glyphicon-edit"></span></a>
                                    <a href="<?php echo base_url("appointment/delete_appointment/$v_app->appointment_id") ?>"
                                       class="btn btn-danger" title="Delete"
                                       onclick="return confirm('Are you sure want to delete!!')"><span
                                                class="glyphicon glyphicon-trash"></span></a>


                                </td>
                            </tr>


                        <?php } ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>


    <script>
        function confirm_delete() {
            return confirm("Are you sure?");
        }

        $(".my-rating").starRating({
            starShape: 'rounded',
            strokeColor: '#894A00',
            strokeWidth: 10,
            starSize: 25,
            disableAfterRate: false,
            onHover: function (currentIndex, currentRating, $el) {
                $('.live-rating' + $el.data('doc-id')).text(currentIndex);
            },
            onLeave: function (currentIndex, currentRating, $el) {
                $('.live-rating' + $el.data('doc-id')).text(currentRating);
            },
            callback: function (currentRating, $el) {
                console.log('rated ' + currentRating);

                var url = "<?php echo base_url('rating/set_rating')?>";

                var doc_id = $el.data('doc-id');

                $.ajax({
                    url: url,
                    method: "POST",
                    data: {
                        'doc_id': doc_id,
                        'val': currentRating
                    },
                    cache: false,
                    success: function (data) {
                        console.log(data);
                        alert(data);
                    },
                    error: function () {
                        alert('Error Occur...');
                    }
                });

            }
        });

    </script><?php
/**
 * Created by PhpStorm.
 * User: SAHIM
 * Date: 8/4/2018
 * Time: 1:12 AM
 */