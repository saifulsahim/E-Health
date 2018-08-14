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

    <link href="<?php echo base_url() ?>asset/css/star-rating-svg.css" rel="stylesheet">

</head>

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
                                    src="<?php echo base_url() ?>asset/img/logo.png" class="img-responsive"
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

                        <form class="form-wrapper" action="<?php echo base_url('welcome/omnisearch') ?>" method="GET">
                            <input name="q" value="<?php echo $query_string ?>" type="text" id="search"
                                   placeholder="Search for doctor name, symptoms, disease, blood donor..." required>
                            <input type="submit" value="go" id="submit">
                        </form>

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

<section id="cta-3">

    <div class="container">
        <h3 class="text-center"><?php echo $result_title ?></h3>
        <?php
        if ($category == 1) {
            # Blood
            ?>

            <table class="table table-dark">
                <thead>
                <tr>

                    <th scope="col">Serial No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Address</th>

                </tr>
                </thead>
                <tbody>

                <?php


                $i = 1;
                foreach ($results as $result) {
                    ?>
                    <tr>

                        <th scope="row"><?php echo $i++ ?></th>
                        <td>
                            <?php echo $result->donor_name; ?>
                        </td>
                        <td>
                            <?php echo $result->donor_mobile_no; ?>
                        </td>
                        <td>
                            <?php echo $result->donor_address; ?>
                        </td>

                    </tr>

                <?php } ?>

                </tbody>
            </table>


        <?php } else { ?>


            <?php if (empty($results)) { ?>

                <p>No Result Found! :(</p>

            <?php } else { ?>


                <table class="table table-dark">
                    <thead>
                    <tr>

                        <th scope="col">Serial No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Specialist</th>
                        <th scope="col">View Details</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    $i = 1;

                    foreach ($results as $result) {

                        $dept = $this->doctor_model->get_dept_record($result->doc_category);


                        ?>
                        <a href="<?php echo base_url("welcome/add_doc_profile/$result->doc_id") ?>">
                            <tr>

                                <th scope="row"><?php echo $i++ ?></th>
                                <td>
                                    <?php echo $result->doc_name; ?>


                                    <span class="my-rating" data-rating="<?= number_format($result->rating, 1) ?>"
                                          data-doc-id="<?= number_format($result->rating, 1) ?>"></span>
                                    (<?php echo $result->rating_count ?>)
                                </td>

                                <td> <?php echo $dept->dept_name; ?></td>
                                <td>
                                    <button type="button" class="btn btn-info"><a
                                                href="<?php echo base_url("welcome/add_doc_profile/$result->doc_id") ?>"
                                                target="_blank">
                                            Appoinment</a></button>
                                </td>

                            </tr>
                        </a>

                    <?php }

                    ?>

                    </tbody>
                </table>

                <h3 class="text-center">Recommended Doctors</h3>

                <table class="table table-dark">
                    <thead>
                    <tr>

                        <th scope="col">Serial No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Specialist</th>
                        <th scope="col">View Details</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    $i = 1;
                    foreach ($recommended_doctors as $recommended_doctor) {


                        $dept = $this->doctor_model->get_dept_record($recommended_doctor->doc_category);
                        ?>
                        <a href="<?php echo base_url("welcome/add_doc_profile/$recommended_doctor->doc_id") ?>">
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
                                    <?php echo $dept->dept_name ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info"><a
                                                href="<?php echo base_url("welcome/add_doc_profile/$recommended_doctor->doc_id") ?>"
                                                target="_blank">
                                            Appoinment</a></button>
                                </td>
                            </tr>
                        </a>

                    <?php } ?>

                    </tbody>
                </table>

            <?php } ?>

        <?php } ?>

    </div>


</section>

<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/custom.js"></script>
<script src="<?php echo base_url() ?>asset/contactform/contactform.js"></script>

<script src="<?php echo base_url() ?>asset/js/jquery.star-rating-svg.min.js"></script>

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

</body>

</html>

