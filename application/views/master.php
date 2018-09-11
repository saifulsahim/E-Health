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

    <!-- DataTables CSS -->
    <link href="<?php echo base_url() ?>asset/admin_asset/vendor/datatables-plugins/dataTables.bootstrap.css"
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
                        <a class="navbar-brand" href="<?php echo base_url() ?>"><img
                                    src="<?php echo base_url() ?>asset/img/logo.png" class="img-responsive"
                                    style="width: 140px; margin-top: -16px;"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                            <!--                            <li class=""><a href="#service">Services</a></li>-->

                            <li class=""><a href="<?php echo base_url('welcome/hospital_master') ?>">Hospital</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/manage_blog') ?>">Blog</a></li>
                            <li class=""><a href="/E-commerce/" target="_blank">Shop</a></li>
                            <!--                            <li class=""><a href="#contact">Contact</a></li>-->
                            <li class=""><a href="<?php echo base_url('welcome/add_donor_master') ?>">Blood</a></li>
                            <li class=""><a href="<?php echo base_url('welcome/add_ambulance_master') ?>">Ambulance</a>
                            </li>
                            <li class=""><a href="<?php echo base_url('welcome/add_doctor_master') ?>">doctor</a></li>


<!--                            <li class="dropdown">-->
<!--                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"-->
<!--                                   aria-haspopup="true" aria-expanded="false">-->
<!---->
<!--                                    --><?php //if ($this->session->userdata('admin_id')) { ?>
<!---->
<!--                                        --><?php //echo $this->session->userdata('admin_name') ?>
<!---->
<!---->
<!--                                    --><?php //} else { ?>
<!---->
<!---->
<!--                                        login/registration <span class="caret"></span>-->
<!--                                    --><?php //} ?>
<!---->
<!---->
<!--                                </a>-->
<!---->
<!--                                <ul class="dropdown-menu">-->
<!---->
<!---->
<!--                                    --><?php //if ($this->session->userdata('admin_id')) { ?>
<!---->
<!--                                        <li class=""><a href="--><?php //echo base_url('admin-dashboard') ?><!--">-->
<!--                                                Dashboard </a></li>-->
<!---->
<!--                                        <li class=""><a href="--><?php //echo base_url('welcome/main_logout') ?><!--">-->
<!--                                                Logout </a></li>-->
<!---->
<!---->
<!--                                    --><?php //} else { ?>
<!--                                        <li class=""><a-->
<!--                                                    href="--><?php //echo base_url('welcome/add_login_signup') ?><!--">Doctor-->
<!--                                                Login</a>-->
<!--                                        </li>-->
<!--                                        <li class=""><a href="--><?php //echo base_url('welcome/add_patient_login') ?><!--">Patient-->
<!--                                                Login</a></li>-->
<!--                                    --><?php //} ?>
<!--                                </ul>-->
<!--                            </li>-->


                            <!--  For Mobile  -->
                            <?php if ($this->session->userdata('admin_id')) { ?>

                                <li class="">
                                    <a href="<?php echo base_url('admin-dashboard') ?>">
                                        Dashboard (<?php echo $this->session->userdata('admin_name') ?>)
                                    </a>
                                </li>

                                <li class=""><a href="<?php echo base_url('welcome/main_logout') ?>">Logout</a>
                                </li>

                            <?php } else { ?>

                                <li class=""><a href="<?php echo base_url('welcome/add_login_signup') ?>">Doctor
                                        Login</a></li>

                                <li class=""><a href="<?php echo base_url('welcome/add_patient_login') ?>">Patient
                                        Login</a></li>

                            <?php } ?>

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
                            <input name="q" type="text" id="search"
                                   placeholder="Search for doctor name, symptoms, disease, blood donor..." required>
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
                <pFind your doctor, hospital or blood donor easily with a minimum of effort. We
                've kept everything organised for you..

                </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                    <div class="icon-info">
                        <h4>24 Hour Support</h4>
                        <p>one can find doctors, ambulance, blood donor any time from any where.</p>
                    </div>
                </div>
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-ambulance"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Emergency Services</h4>
                        <p>Find Blood donor and ambulance anytime.</p>
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
                        <p>get doctor appoinment anytime
                        </p>
                    </div>
                </div>
                <div class="service-info">
                    <div class="icon">
                        <i class="fa fa-medkit"></i>
                    </div>
                    <div class="icon-info">
                        <h4>Premium Healthcare</h4>
                        <p>No Premium helatcare packages right now.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--<section id="contact" class="section-padding">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <h2 class="ser-title">Contact us</h2>-->
<!--                <hr class="botm-line">-->
<!--            </div>-->
<!--            <div class="col-md-4 col-sm-4">-->
<!--                <h3>Contact Info</h3>-->
<!--                <div class="space"></div>-->
<!--                <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>O.R Nizam Road<br> Golpahar Moor, Chittagong-->
<!--                </p>-->
<!--                <div class="space"></div>-->
<!--                <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@ehealthbd.com</p>-->
<!--                <div class="space"></div>-->
<!--                <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>01677676056</p>-->
<!--            </div>-->
<!--            <div class="col-md-8 col-sm-8 marb20">-->
<!--                <div class="contact-info">-->
<!--                    <h3 class="cnt-ttl">For any query, contact us</h3>-->
<!--                    <div class="space"></div>-->
<!--                    <div id="sendmessage">Your message has been sent. Thank you!</div>-->
<!--                    <div id="errormessage"></div>-->
<!--                    <form action="" method="post" role="form" class="contactForm">-->
<!--                        <div class="form-group">-->
<!---->
<!--                            <div class="validation"></div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" name="name" class="form-control br-radius-zero" id="name"-->
<!--                                   placeholder="Your Name" data-rule="minlen:4"-->
<!--                                   data-msg="Please enter at least 4 chars"/>-->
<!--                            <div class="validation"></div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!---->
<!--                            <input type="tel" class="form-control br-radius-zero" name="phone" id="phone"-->
<!--                                   placeholder="Your phone number" data-rule="phone" pattern="[0-9]{11}"-->
<!--                                   data-msg="Please enter a valid number">-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!---->
<!--                            <input type="email" class="form-control br-radius-zero" name="email" id="email"-->
<!--                                   placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">-->
<!--                        </div>-->
<!---->
<!---->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--            </form>-->
<!--        </div>-->
<!--    </div>-->
<!--    </div>-->
<!---->
<!---->
<!--    </form>-->
<!--    </div>-->
<!--    </div>-->
<!--    </div>-->
<!--    </div>-->
<!--</section>-->
<!--/ service-->

<!--/ footer-->


<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/custom.js"></script>
<script src="<?php echo base_url() ?>asset/contactform/contactform.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url() ?>asset/admin_asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>asset/admin_asset/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/admin_asset/vendor/datatables-responsive/dataTables.responsive.js"></script>


<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
