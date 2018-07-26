<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Donor extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(!isset($this->session->admin_id) && ($this->session->admin_status !==1))
        {

            redirect('admin');
        }
        $this->load->model('blood_donor');
    }





    public function add_donor()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_blood_donor_form', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_donor()
    {
        $this->blood_donor->save_donor();
        $this->manage_donor();
    }

    public function manage_donor()
    {
        $data = array();
        $data['donor_data'] = $this->blood_donor->select_all_donors();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_donor_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function change_donor_status($donor_id,$status)
    {
        $this->blood_donor->change_donor_status($donor_id,$status);
        redirect('manage-donor');

    }

    public function edit_donor($donor_id)
    {
        $data['donor_data'] = $this->blood_donor->edit_donor_details($donor_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_donor_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_donor()
    {
        $this->blood_donor->update_donor();

        redirect('manage-donor');

    }

    public function delete_donor($donor_id)
    {
        $this->blood_donor->delete_donor($donor_id);

        redirect('manage-donor');

    }


}