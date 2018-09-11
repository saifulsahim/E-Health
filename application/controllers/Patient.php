<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('patient_model');
    }


    public function check_patient_login()
    {

        $patient_email = $this->input->post('patientEmail', true);
//        echo $doc_email;
//        exit();

        $patient_password = $this->input->post('patientPassword', true);
//        echo $doc_password;
//        exit();
//        $encrypted_password = password_hash($doc_password,PASSWORD_DEFAULT);
//        $data['doc_password']= $encrypted_password;

//        $encrypt_password = password_hash($encrypted_password, PASSWORD_DEFAULT);
//        echo $encrypt_password;
//        exit();


        $patient_details = $this->patient_model->get_patient_details($patient_email);


//        echo '<pre>';
//        print_r($patient_details);
//        exit();

        if ($patient_details) {
            if (password_verify($patient_password, $patient_details->password)) {
                $session_data['email_address'] = $patient_details->email_address;
                $session_data['patient_id'] = $patient_details->patient_id;
                $session_data['status'] = $patient_details->status;
                //$session_data['admin_role'] = $admin_details->admin_role;


                $this->session->set_userdata($session_data);

                redirect('admin-dashboard');

//
//                $data = array();
//                $data['dashboard'] = $this->load->view('dashboard', '', true);
//                $this->load->view('admin_master', $data);


            } else {
                $data['error_message'] = 'Incorrect Email or Password';
                //redirect('doctor/doc_login_check');
                $this->load->view('pages/patient_login_signup', $data);
            }
        } else {
            echo 'Data not found! Please register';

        }
//        }

    }

    public function save_patient()
    {
        $this->patient_model->save_patient();
    }

    public function manage_patient()
    {
        $data = array();
        $doc_id = $this->session->userdata('insert_id');
//        echo $patient_id;
//        exit();
        //$patient_id = $this->session->userdata('insert_id');
        $data['app_data'] = $this->appointment_model->select_all_appointments_for_doctor($doc_id);


        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_appointment_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }



    public function upcoming_patient()
    {

        $data = array();
        $doc_id = $this->session->userdata('insert_id');
//        echo $patient_id;
//        exit();
        //$patient_id = $this->session->userdata('insert_id');
        $data['app_data'] = $this->appointment_model->select_all_upcoming_appointments_for_doctor($doc_id);


        $data['dashboard'] = $this->load->view('admin/admin_pages/upcoming_appointment_form', $data, true);
        $this->load->view('admin/admin_master', $data);

    }



    public function manage_patient_individual()
    {
        $data = array();
        $patient_id = $this->session->userdata('insert_id');
//        echo $patient_id;
//        exit();
        $data['app_data'] = $this->appointment_model->select_all_appointments_for_patient($patient_id);


        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_patient_individual_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function patient_list()
    {

        $data = array();
        $data['patient_data'] = $this->patient_model->select_all_patients();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_patient_list', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function change_patient_status($patient_id,$status)
    {
        $this->patient_model->change_patient_status($patient_id,$status);
        redirect('patient/patient_list');
    }


    public function edit_patient($patient_id)
    {

        $data = array();
        $data['patient_info'] =$this->patient_model->edit_patient_info($patient_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_patient_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_patient()
    {
        $this->patient_model->update_patient_by_id();
        $sdata =array();
        $sdata['message'] = "Update Patient Information Successfully !";
        $this->session->set_userdata($sdata);
        $patient_id = $this->input->post('patientId',true);
        redirect('patient/edit_patient/'.$patient_id);
    }


    public function delete_patient($patient_id)
    {
        $this->patient_model->delete_patient_by_id($patient_id);
        redirect('patient/patient_list');
    }
}