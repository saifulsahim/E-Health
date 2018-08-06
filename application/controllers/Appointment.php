<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('appointment_model');
    }


    public function save_appointment()
    {

        $message = $this->appointment_model->save_appointment();
        $this->session->set_userdata('message', $message);
        $id = $this->input->post('docId', true);
        redirect('welcome/add_doc_profile/' . $id);


        //$this->load->view('pages/doctor_profile');
    }

    public function manage_appointment()
    {
        $data = array();
        $data['app_data'] = $this->appointment_model->select_all_appointments();
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_appointment_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edi_appointment($id)
    {

        $data['app_data'] = $this->appointment_model->edit_appointment_details($id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_appointment_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_appointment()
    {
        $this->appointment_model->update_appointment();

        $sdata = array();
        $sdata['message'] = "Update Appointment Information Successfully !";
        $this->session->set_userdata($sdata);
        $id = $this->input->post('appId', true);
        redirect('appointment/edi_appointment/' . $id);

        //redirect('appointment/manage_appointment');
    }

    public function delete_appointment($id)
    {

        $this->appointment_model->delete_appointment_by_id($id);

        redirect('appointment/manage_appointment');
    }

    public function done_appointment($id)
    {
        $this->appointment_model->done_appointment_by_id($id);

        redirect('patient/manage_patient');
    }


}