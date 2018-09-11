<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eHealth</title>


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/style.css">



    <!-- DataTables CSS -->
    <link href="<?php echo base_url() ?>asset/admin_asset/vendor/datatables-plugins/dataTables.bootstrap.css"
          rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url() ?>asset/admin_asset/vendor/datatables-responsive/dataTables.responsive.css"
          rel="stylesheet">


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
                        <a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url()?>asset/img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav">
<!--                            <li class=""><a href="index.html">Home</a></li>-->
<!--                            <li class=""><a href="hospital.html">Hospital</a></li>-->
<!--                            <li class=""><a href="doctorlist.html">Doctor</a></li>-->
<!--                            <li class=""><a href="#blog">Blog</a></li>-->
<!--                            <li class=""><a href="#shop">Shop</a></li>-->
<!--                            <li class=""><a href="blood.html">Blood</a></li>-->
<!--                            <li class="active"><a href="ambulance.html">Ambulance</a></li>-->


                            <li class=""><a href="<?php echo base_url()?>">Home</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/hospital_master')?>">Hospital</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/manage_blog') ?>">Blog</a></li>
                            <li class=""><a href="http://localhost/E-commerce/" target="_blank">Shop</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/add_donor_master')?>">Blood</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/add_ambulance_master')?>">Ambulance</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/add_doctor_master')?>">Doctor</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">

                                    <?php if ($this->session->userdata('admin_id')) { ?>

                                        <?php echo $this->session->userdata('admin_name') ?>


                                    <?php } else { ?>


                                        login/registration <span class="caret"></span>
                                    <?php } ?>


                                </a>

                                <ul class="dropdown-menu">


                                    <?php if ($this->session->userdata('admin_id')) { ?>

                                        <li class=""><a href="<?php echo base_url('admin-dashboard') ?>">
                                                Dashboard </a></li>

                                        <li class=""><a href="<?php echo base_url('welcome/main_logout') ?>">
                                                Logout </a></li>


                                    <?php } else { ?>
                                        <li class=""><a
                                                    href="<?php echo base_url('welcome/add_login_signup') ?>">Doctor </a>
                                        </li>
                                        <li class=""><a href="<?php echo base_url('welcome/add_patient_login') ?>">Patient
                                                Login</a></li>
                                    <?php } ?>
                                </ul>
                            </li>


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
                        <img src="<?php echo base_url()?>asset/img/logo.png" class="img-responsive">
                    </div>
                    <div class="banner-text text-center">
                        <h1 class="white">Healthcare at your desk!!</h1>
                        <p>Find your doctor, hospital or blood donor easily with a minimum of effort. We've kept everything organised for you..</p>
                        <a href="<?php echo base_url('welcome/add_doctor_master')?>" class="btn btn-appoint">Make an Appointment.</a>
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
<section class="cta-3" id="cta-3">
    <div class="container">
        <h3 class="text-center">Ambulance Information</h3>
        <table width="100%" class="table table-striped table-bordered table-hover dataTables-example">
            <thead>
            <tr>
                <th scope="col">Serial No</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile no</th>
                <th scope="col">Address</th>
            </tr>
            </thead>
            <tbody>
            <?php

            $i = 1;
            foreach ($amb_info as $amb)

            {

            ?>
            <tr>
                <td scope="row"><?php echo $i++?></td>
                <td><?php echo $amb->amb_name?></td>
                <td><?php echo $amb->amb_contact?></td>
                <td><?php echo $amb->amb_loc?></td>
            </tr>


           <?php } ?>
            </tbody>
        </table>


    </div>
</section>


<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>asset/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>asset/js/custom.js"></script>
<script src="<?php echo base_url()?>asset/contactform/contactform.js"></script>



<!-- DataTables JavaScript -->
<script src="<?php echo base_url() ?>asset/admin_asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>asset/admin_asset/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/admin_asset/vendor/datatables-responsive/dataTables.responsive.js"></script>



<script>
    $(document).ready(function () {
        $('.dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>