<?php

$id = $this->session->userdata("admin_id");
$details = $this->admin_model->get_record($id);

?>




    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">


        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa  fa-user-md     fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <?php if($this->session->userdata('admin_role')==='Doctor'){ ?>
                                <div class="huge"><?php  //echo $this->doctor_model->get_all_lists_by_id($this->session->userdata('doc_id'));?></div>
                            <?php }else{ ?>
                                <div class="huge"><?php  echo $this->db->count_all_results('tbl_doctor');?></div>
                            <?php } ?>
                            <div>Doctors!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('manage-doctor')?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>




        <?php if (($details->admin_role == "Admin") || ($details->admin_role =="Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa  fa-hospital-o   fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php  echo $this->db->count_all_results('tbl_hospital');?></div>
                            <div>Hospitals</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('manage-hospital')?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>



        <?php if (($details->admin_role == "Admin") || ($details->admin_role =="Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php  echo $this->db->count_all_results('tbl_donor');?></div>
                            <div>Blood Donors</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('manage-donor')?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>



        <?php if (($details->admin_role == "Admin") || ($details->admin_role =="Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-ambulance   fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php  echo $this->db->count_all_results('tbl_ambulance');?></div>
                            <div>Total Ambulances!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('manage-ambulance')?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>


        <?php if (($details->admin_role == "Admin") || ($details->admin_role =="Moderator")) { ?>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa  fa-user-md     fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php  echo $this->db->count_all_results('tbl_appointment');?></div>
                            <div>Total Appointments!!</div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url('appointment/manage_appointment')?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>



    </div>
    <!-- /.row -->

    <!-- /.row -->
