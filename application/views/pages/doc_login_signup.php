<script type="text/javascript">


    var xmlhttp = false;
    // Check if we are using IE.

    try {

        //if the Javascript version is greater than 5 .
        xmlhttp = new ActiveXObject("Msxm12.XMLHTTP");
        //alert(xmlhttp);
        //alert(You are using Microsoft IE);
    }
    catch (e) {
        //alert(e);
        //if not, then use the older active x object.

        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    // alert(typeof XMLHttpRequest123);
    // If we are using  a non -IE browser, create a javascript instance
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
        //alert("You are not using Microsoft IE);
    }

    function makerequest(given_text, objID) {
        //alert(given_text);
        //var_obj = document.getElementById (objID);
        //serverPage = 'search.php?text='given_text+ '&abc='+d23;
        serverPage = '<?php echo base_url()?>welcome/ajax_email_check/' + given_text;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function () {
            //alert(xmlhttp.readyState);
            //alert(xmlhttp.status);

            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //alert(xmlhttp.responseText);
                document.getElementById(objID).innerHTML = xmlhttp.responseText;


                if (xmlhttp.responseText == 'Already Exists !') {

                    document.getElementById('sbtn').disabled = true;
                }
                if (xmlhttp.responseText == 'Email Address Required') {

                    document.getElementById('sbtn').disabled = true;
                }

                if (xmlhttp.responseText == 'Available') {

                    document.getElementById('sbtn').disabled = false;
                }

            }
        }

        xmlhttp.send(null);
    }
</script>

<?php


$id = $this->session->userdata("admin_id");

//echo $id;
//exit();
$details = $this->admin_model->get_record($id);
//echo '<pre>';
//print_r($details);
//exit();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eHealth</title>


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css_log/style.css">


    <!--Datepicker CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/admin_asset/datepicker/css/bootstrap-datepicker3.css">

    <!--    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">-->
    <!--    <link rel="stylesheet" type="text/css" href="-->
    <?php //echo base_url() ?><!--asset/css/font-awesome.min.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="-->
    <?php //echo base_url() ?><!--asset/css/bootstrap.min.css">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo base_url() ?><!--asset/css/style.css">-->

</head>

<body>
<section id="banner" class="banner">
    <div class="bg-color">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="#" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body" class="content">
                            <div class="row">
                                <div class="col-lg-12">


                                    <form id="login-form"
                                          action="<?php echo base_url('admin_login/check_admin_login') ?>" method="post"
                                          role="form" style="display: block;">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Please Sign In</h3>

                                            <?php if (isset($error_message)) {
                                                echo $error_message;

                                            }

                                            ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="adminEmail" id="username" tabindex="1"
                                                   class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="adminPassword" id="password" tabindex="2"
                                                   class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                            <label for="remember"> Remember Me</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="login-submit" id="login-submit"
                                                           tabindex="4" class="form-control btn btn-login"
                                                           value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="text-center">
                                                        <a href="#" tabindex="5" class="forgot-password">Forgot
                                                            Password?</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </form>


                                    <form id="register-form" action="<?php echo base_url('welcome/save_doctor') ?>"
                                          method="post" role="form"
                                          enctype="multipart/form-data" style="display: none;">


                                        <?php


                                        $message = $this->session->message;

                                        if (isset($message)) {

                                            echo $message;
                                            $this->session->unset_userdata('message');
                                        }

                                        ?>


                                        <div class="form-group">

                                            <input type="text" name="docName" id="username" tabindex="1"
                                                   class="form-control" placeholder="Doctor Name" value="">
                                        </div>

                                        <div class="form-group">

                                            <input type="email" name="docEmail" id="email" tabindex="1"
                                                   onblur="makerequest(this.value,'res')"
                                                   class="form-control" placeholder="Email Address" value="">
                                            <span id="res" style="color: blue"></span>
                                        </div>


                                        <div class="form-group">

                                            <input type="file" name="docImage" id="email" tabindex="1"
                                                   class="form-control" placeholder="Enter Image" value="">
                                        </div>


                                        <div class="form-group">

                                            <input type="text" name="docMobileNo" id="username" tabindex="1"
                                                   class="form-control" placeholder="Enter Mobile No" value="">
                                        </div>


                                        <div class="form-group">
                                            <input type="text" name="docQual" class="form-control"
                                                   placeholder="Enter Qualification">
                                        </div>


                                        <div class="form-group">

                                            <input type="text" name="docDesignation" id="username" tabindex="1"
                                                   class="form-control" placeholder="Enter Designation" value="">
                                        </div>


                                        <div class="form-group">

                                            <select class="form-control select2" name="docCategory" id="selectError3">

                                                <option>--Select Speciality---</option>

                                                <?php foreach ($dept_info as $dept) { ?>

                                                    <option value="<?php echo $dept->dept_id ?>"><?php echo $dept->dept_name; ?></option>


                                                <?php } ?>

                                                ?>

                                            </select>

                                        </div>


                                        <div class="form-group">

                                            <select class="form-control select2" name="hosName" id="selectError3">

                                                <option>--Select Hospital Name---</option>

                                                <?php foreach ($hospital_info as $hospital) { ?>

                                                    <option value="<?php echo $hospital->hospital_id ?>"><?php echo $hospital->hospital_name; ?></option>


                                                <?php } ?>


                                            </select>

                                        </div>



                                        <div class="form-group">
                                            <input type="text" name="symptoms" placeholder="Enter Symptoms"
                                                   class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <input type="text" name="disease" placeholder="Enter Disease"
                                                   class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <input type="text" name="docJoinDate" placeholder="Enter Joining Date"
                                                   class="form-control datepicker">
                                        </div>


                                        <div class="form-group">
                                            <input type="text" name="docFees" id="username" tabindex="1"
                                                   class="form-control" placeholder="Enter Fees" value="">
                                        </div>


                                        <div class="form-group">
                                            <input type="password" name="docPassword" id="password" tabindex="2"
                                                   class="form-control" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="confirmPassword" id="confirm-password"
                                                   tabindex="2" class="form-control" placeholder="Confirm Password">
                                        </div>


                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="rbtn" id="sbtn"
                                                           tabindex="4" class="form-control btn btn-register"
                                                           value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>-->
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>-->
<!---->
<!---->
<!--<script>-->
<!--    $(".select2").select2();-->
<!--</script>-->

<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asset/js_log/custom.js"></script>
<script src="<?php echo base_url() ?>asset/contactform/contactform.js"></script>

<!--Datepicker JS-->
<script src="<?php echo base_url() ?>asset/admin_asset/datepicker/js/bootstrap-datepicker.js"></script>


<script>
    $(function () {
        $(".datepicker").datepicker()

    });

</script>

</body>