<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambulance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($this->session->admin_id) && ($this->session->admin_status !==1))
        {

            redirect('admin');
        }
        $this->load->model('ambulance_model');
    }


    public function add_ambulance()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_ambulance_form', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_ambulance()
    {

        $this->ambulance_model->save_ambulance();
        redirect('manage-ambulance');
    }

    public function manage_ambulance()
    {
        $data = array();
        $data['ambulance_data'] = $this->ambulance_model->select_all_ambulance();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_ambulance_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function change_ambulance_status($amb_id,$status)
    {
        $this->ambulance_model->change_ambulance_status($amb_id,$status);
        redirect('manage-ambulance');
    }
    public function edit_ambulance($amb_id)
    {
        $data['amb_data'] = $this->ambulance_model->edit_ambulance_details($amb_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_ambulance_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_ambulance()
    {
        $this->ambulance_model->update_ambulance();

        redirect('manage-ambulance');
    }

    public function delete_ambulance($amb_id)
    {
        $this->ambulance_model->delete_ambulance($amb_id);

        redirect('manage-ambulance');

    }
}