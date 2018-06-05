<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cabin_model');
    }

    public function add_cabin()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_cabin_form', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_cabin()
    {
        $this->cabin_model->save_cabin();
        $this->session->set_userdata('message', 'Cabin saved successfully');
        redirect('add-cabin');
    }

    public function manage_cabin()
    {
        $data = array();
        $data['cabin_data'] = $this->cabin_model->select_all_cabines();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_cabin_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function change_cabin_status($cabin_id,$status)
    {
        $this->cabin_model->change_cabin_status($cabin_id,$status);
        redirect('manage-cabin');
    }

    public function view_cabin($cabin_id)
    {
        $data = array();
        $data['cabin_info'] =$this->cabin_model->view_cabin($cabin_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/view_cabin_form', $data, true);
        $this->load->view('admin/admin_master', $data);

    }


    public function edit_cabin($cabin_id)
    {
        $data = array();
        $data['cabin_info'] =$this->cabin_model->edit_cabin_info($cabin_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_cabin_form', $data, true);
        $this->load->view('admin/admin_master', $data);

    }


    public function update_cabin()
    {
        $this->cabin_model->update_cabin_by_id();
        $sdata =array();
        $sdata['message'] = "Update Cabin Information Successfully !";
        $this->session->set_userdata($sdata);
        $cabin_id = $this->input->post('cabinId',true);
        redirect('edit-cabin/'.$cabin_id);

    }
    public function delete_cabin($cabin_id)
    {
        $this->cabin_model->delete_cabin_by_id($cabin_id);
        redirect('manage-cabin');
    }

}