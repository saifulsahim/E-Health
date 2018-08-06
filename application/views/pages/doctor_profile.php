<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eHealth</title>


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">


    <!--Datepicker CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/datepicker/css/bootstrap-datepicker3.css">

    <!--Timepicker-->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/timepicker/jquery.timepicker.min.css">

    <script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>

    <link href="<?php echo base_url() ?>asset/css/star-rating-svg.css" rel="stylesheet">

</head>

<?php
//print_r($doc_info);
//exit();

?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!--banner-->
<section id="banner" class="banner">
    <div class="bg-color">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url() ?>"><img
                                    src="<?php echo base_url() ?>asset/img/logo.png"
                                    class="img-responsive"
                                    style="width: 140px; margin-top: -16px;"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class=""><a href="<?php echo base_url() ?>">Home</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/hospital_master') ?>">Hospital</a></li>
                            <li class=""><a href="#blog">Blog</a></li>
                            <li class=""><a href="#shop">Shop</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/add_donor_master') ?>">Blood</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/add_ambulance_master') ?>">Ambulance</a>
                            </li>
                            <li class=""><a href="<?php echo base_url('welcome/add_doctor_master') ?>">Doctor</a></li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="banner-info">
                    <div class="banner-logo text-center">
                        <img src="<?php echo base_url() ?>asset/img/logo.png" class="img-responsive">
                    </div>
                    <div class="banner-text text-center">
                        <h1 class="white">Healthcare at your desk!!</h1>
                        <p>Find your doctor, hospital or blood donor easily with a minimum of effort. We've kept
                            everything organised for you..</p>
                        <a href="<?php echo base_url('welcome/add_doctor_master') ?>" class="btn btn-appoint">Make an
                            Appointment.</a>
                    </div>
                    <div class="overlay-detail text-center">
                        <a href="#cta-3"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ banner-->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-offset-1">
            <div class="panel panel-default" style="margin-top:100px">
                <div class="panel-heading"><h4>Doctor Profile</h4></div>

                <div class="panel-body">

                    <div class="box box-info">

                        <div class="box-body">
                            <div class="col-sm-6">
                                <div class="text-left"><img alt="User Pic"
                                                            src="<?php echo base_url() . $doc_info->doc_image; ?>"
                                                            id="profile-image1" class="img-responsive">

                                    <input id="profile-image-upload" class="hidden" type="file">

                                    <!--Upload Image Js And Css-->


                                </div>

                                <br>

                                <!-- /input-group -->
                            </div>
                            <!--                    <div class="col-sm-6">-->
                            <!--                        <h4 style="color:#00b1b1;">-->
                            <?php //echo $doc_info->doc_name?><!--</h4></span>-->
                            <!---->
                            <!--                    </div>-->
                            <div class="clearfix"></div>
                            <hr style="margin:5px 0 5px 0;">


                            <div class="col-sm-3 col-xs-4 tital ">Doctor Name:</div>
                            <div class="col-sm-4 col-xs-6 "><strong><?php echo $doc_info->doc_name ?></strong></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>


                            <div class="col-sm-5 col-xs-6 tital ">Doctor Email:</div>
                            <div class="col-sm-7 col-xs-6 "><?php echo $doc_info->doc_email ?></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>


                            <div class="col-sm-5 col-xs-6 tital ">Qualification:</div>
                            <div class="col-sm-7 col-xs-6 "><?php echo $doc_info->doc_qualification ?></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">Designation:</div>
                            <div class="col-sm-7 col-xs-6 "><?php echo $doc_info->doc_designation ?></div>
                            <div class="clearfix"></div>
                            <div class="bot-border"></div>


                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">Date Of Birth:</div>
                            <div class="col-sm-7"><?php echo $doc_info->doc_birth_date ?></div>


                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">Doctor Chamber:</div>
                            <div class="col-sm-7"><?php echo $doc_info->doc_chamber ?></div>


                            <div class="clearfix"></div>
                            <div class="bot-border"></div>

                            <div class="col-sm-5 col-xs-6 tital ">Doctor Fees:</div>
                            <div class="col-sm-7"><?php echo $doc_info->doc_fee ?></div>


                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="ser-title">Contact us</h2>
                <hr class="botm-line">
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>Contact Info</h3>
                <div class="space"></div>
                <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>O.R Nizam Road<br> Golpahar Moor, Chittagong
                </p>
                <div class="space"></div>
                <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@companyname.com</p>
                <div class="space"></div>
                <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>12345565</p>
            </div>
            <div class="col-md-8 col-sm-8 marb20">
                <div class="contact-info">
                    <h3 class="cnt-ttl">Book an appointment</h3>
                    <div class="space"></div>
                    <!--                    <div id="sendmessage">Your message has been sent. Thank you!</div>-->
                    <div id="errormessage"></div>

                    <?php

                    $message = $this->session->message;

                    if (isset($message)) {

                        echo $message;
                        $this->session->unset_userdata('message');
                    }

                    ?>

                    <?php

                    if (isset($this->session->admin_id)) {

                        //echo $this->session->admin_id;

                    ?>

                    <?php echo form_open('appointment/save_appointment') ?>


                    <div class="form-group">

                        <div class="validation"></div>
                    </div>


                    <div class="form-group">
                        <label>Enter Appointment Date:</label>
                        <input type="text" class="form-control datepicker" name="appDate"
                               placeholder="yyyy-mm-dd">
                    </div>


                    <div class="form-group">
                        <label for="title">Time:</label>
                        <input class="form-control timepicker" type="text" name="appTime" placeholder="Set Time">
                    </div>


                </div>

                <input type="hidden" name="docId" value="<?= $doc_info->doc_id; ?>">

                <div class="form-action">
                    <button type="submit" class="btn btn-form">Submit</button>
                </div>
                </form>

                <?php } else { ?>

                    <p>You are not login. To login click <a href="<?php echo base_url('welcome/add_patient_login') ?>">here</a>.</p>

                <?php } ?>


                <h3 class="text-center">Recommended Other Doctors</h3>

                <table class="table table-dark">
                    <thead>
                    <tr>

                        <th scope="col">Serial No</th>
                        <th scope="col">Name</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    $i = 1;
                    foreach ($recommended_doctors as $recommended_doctor) {
                        ?>

                        <tr>
                            <th scope="row"><?php echo $i++ ?></th>
                            <td>
                                <?php echo $recommended_doctor->doc_name; ?>
                                <span class="my-rating"
                                      data-rating="<?= number_format($recommended_doctor->rating, 1) ?>"
                                      data-doc-id="<?= number_format($recommended_doctor->rating, 1) ?>"></span>
                                (<?php echo $recommended_doctor->rating_count ?>)
                            </td>
                            <td>
                                <a href="<?php echo base_url("welcome/add_doc_profile/$recommended_doctor->doc_id"); ?>">
                                    View Details
                                </a>
                            </td>
                        </tr>


                    <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </div>
</section>
<script>
    $(function () {
        $('#profile-image1').on('click', function () {
            $('#profile-image-upload').click();
        });
    });
</script>

<script src="<?php echo base_url() ?>asset/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/custom.js"></script>
<script src="<?php echo base_url() ?>asset/contactform/contactform.js"></script>

<!--Datepicker JS-->
<script src="<?php echo base_url() ?>asset/datepicker/js/bootstrap-datepicker.js"></script>

<!-- TimePicker JS-->
<script src="<?php echo base_url() ?>asset/timepicker/jquery.timepicker.min.js"></script>

<script src="<?php echo base_url() ?>asset/js/jquery.star-rating-svg.min.js"></script>

<script>
    $(function () {
        $(".datepicker").datepicker()

    });

</script>

<script>
    $(document).ready(function () {
        $('input.timepicker').timepicker({});
    });

</script>

<script>
    $(function () {
        $(".my-rating").starRating({
            starShape: 'rounded',
            strokeColor: '#894A00',
            strokeWidth: 10,
            starSize: 15,
            readOnly: true
        });
    });
</script>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>-->
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>-->
<!---->
<!---->
<!--<script>-->
<!--    $(".select2").select2();-->
<!--</script>-->


</body>

</html>


</div>
</div>




