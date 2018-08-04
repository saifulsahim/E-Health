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
                            <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
<!--                            <li class=""><a href="#service">Services</a></li>-->

                            <li class=""><a href="<?php echo base_url('welcome/hospital_master') ?>">Hospital</a></li>
                            <li class=""><a href="#blog">Blog</a></li>
                            <li class=""><a href="http://localhost/E-commerce/" target="_blank">Shop</a></li>
                            <li class=""><a href="#contact">Contact</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/add_donor_master') ?>">Blood</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/add_ambulance_master') ?>">Ambulance</a>
                            </li>
                            <li class=""><a href="<?php echo base_url('welcome/add_doctor_master') ?>">doctor</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/add_login_signup') ?>">login&signup</a>
                            <li class=""><a href="<?php echo base_url('welcome/add_patient_login') ?>">Patient Login</a>
                            </li>
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


                        <form class="form-wrapper">
                            <input type="text" id="search" placeholder="Search for..." required>
                            <input type="submit" value="go" id="submit">
                        </form>


                        <a href="<?php echo base_url('welcome/add_doctor_master') ?>" class="btn btn-appoint">Make an
                            Appointment.</a>
                    </div>
                    <div class="overlay-detail text-center">
                        <a href="#service"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ banner-->
<!--service-->
<section id="service" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h2 class="ser-title">Our Service</h2>
                <hr class="botm-line">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    cillum.</p>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                    <div class="icon-info">
                        <h4>24 Hour Support</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-ambulance"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Emergency Services</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Medical Counseling</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-medkit"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Premium Healthcare</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ service-->

<!--/ footer-->

<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/custom.js"></script>
<script src="<?php echo base_url() ?>asset/contactform/contactform.js"></script>


</body>

</html>
