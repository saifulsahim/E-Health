<?php


$id = $this->session->userdata("admin_id");
$details = $this->admin_model->get_record($id);
//echo '<pre>';
//print_r($details);
//exit();
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-health</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>asset/admin_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>asset/admin_asset/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!--Datepicker CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/admin_asset/datepicker/css/bootstrap-datepicker3.css">


    <!--Timepicker-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/timepicker/jquery.timepicker.min.css">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>asset/admin_asset/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>asset/admin_asset/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>asset/admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url()?>asset/admin_asset/vendor/morrisjs/morris.css" rel="stylesheet">

    <link href="<?php echo base_url()?>asset/css/star-rating-svg.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>asset/admin_asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>asset/admin_asset/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/jquery.star-rating-svg.min.js"></script>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url('admin-dashboard')?>"> Admin </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo base_url() ?>admin/edit_admin/<?=$this->session->userdata('admin_id');?>"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>

                    <li class="divider"></li>
                    <li><a href="<?php echo base_url()?>admin-logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
<!--                    <li class="sidebar-search">-->
<!--                        <div class="input-group custom-search-form">-->
<!--                            <input type="text" class="form-control" placeholder="Search...">-->
<!--                            <span class="input-group-btn">-->
<!--                                <button class="btn btn-default" type="button">-->
<!--                                    <i class="fa fa-search"></i>-->
<!--                                </button>-->
<!--                            </span>-->
<!--                        </div>-->
<!--                        <!-- /input-group -->
<!--                    </li>-->
                    <li>
                        <a href="<?php echo base_url('admin-dashboard')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('register-admin')?>"><i class="fa fa-table fa-fw"></i>Register Admin</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage-admin')?>">Manage Admin</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php } ?>


<!--                    <li>-->
<!--                        <a href="--><?php //echo base_url('register-admin')?><!--"><i class="fa fa-table fa-fw"></i>Register Admin</a>-->
<!--                    </li>-->


                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
                    <li>


                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Departments<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url()?>add-department">Add Department</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage-department')?>">Manage Department</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php } ?>


                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Doctor")) { ?>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Doctors<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url()?>add-doctor">Add Doctor</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage-doctor')?>">Manage Doctor</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php } ?>




                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Blood Donor<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('add-donor')?>">Add Donor</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage-donor')?>">Manage Donor</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <?php } ?>



                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Diagonstic<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('add-test')?>">Add Test </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage-test')?>">Manage Test</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <?php } ?>



                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Hospital<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('add-hospital')?>">Add Hospital</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage-hospital')?>">Manage Hospital</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <?php } ?>


                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Cabin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('add-cabin')?>">Add Cabin</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage-cabin')?>">Manage Cabin</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <?php } ?>


                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Appointment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('appointment/manage_appointment')?>">Manage Appointment</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <?php } ?>












                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Moderator")) { ?>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Ambulance<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('add-ambulance')?>">Add Ambulance</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('manage-ambulance')?>">Manage Ambulance</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <?php } ?>



                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Doctor")) { ?>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Appointment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('patient/manage_patient')?>">Appointment List</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php } ?>




                    <?php if (($details->admin_role == "Admin") || ($details->admin_role == "Patient")) { ?>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Appointment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url('patient/manage_patient_individual')?>">Appointment History</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php } ?>


                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">

    <?php echo $dashboard?>

    <!-- /#page-wrapper -->
    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<!--<script src="--><?php //echo base_url()?><!--asset/admin_asset/vendor/jquery/jquery.min.js"></script>-->

<!--<script src="--><?php //echo base_url()?><!--asset/js/jquery.star-rating-svg.min.js"></script>-->



<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()?>asset/admin_asset/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url()?>asset/admin_asset/vendor/metisMenu/metisMenu.min.js"></script>

<!--Datepicker JS-->
<script src="<?php echo base_url()?>asset/admin_asset/datepicker/js/bootstrap-datepicker.js"></script>


<!-- TimePicker JS-->
<script src="<?php echo base_url()?>asset/timepicker/jquery.timepicker.min.js"></script>

<!-- Morris Charts JavaScript -->
<!--<script src="--><?php //echo base_url()?><!--asset/admin_asset/vendor/raphael/raphael.min.js"></script>-->
<!--<script src="--><?php //echo base_url()?><!--asset/admin_asset/vendor/morrisjs/morris.min.js"></script>-->
<!--<script src="--><?php //echo base_url()?><!--asset/admin_asset/data/morris-data.js"></script>-->

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url()?>asset/admin_asset/dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url()?>asset/admin_asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>asset/admin_asset/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>asset/admin_asset/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url()?>asset/admin_asset/dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>


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


</body>

</html>
