<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!isset($this->session->admin_id) && ($this->session->admin_status !==1))
        {

            redirect('admin');
        }

        $this->load->model('admin_model');
    }

    public function show_dashboard()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/dashboard', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function show_admin_register_form()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/register_admin_form', '', true);
        $this->load->view('admin/admin_master', $data);

    }

    public function register_new_admin()
    {
        $this->form_validation->set_rules('adminName','Admin Name', 'required|max_length[255]' );
        $this->form_validation->set_rules('adminEmail','Email Address', 'required|max_length[255]|is_unique[tbl_admin.admin_email]' );
        $this->form_validation->set_rules('adminPassword','Admin Password', 'required|min_length[6]' );
        $this->form_validation->set_rules('confirmPassword','Confirm Password', 'required|min_length[6]|matches[adminPassword]' );

        if($this->form_validation->run())
        {
            $this->admin_model->register_new_admin();


//            $data =array();
            $data['success_message'] = 'User Registration Successful';
            $data['dashboard'] = $this->load->view('admin/admin_pages/register_admin_form', $data, true);

            $this->load->view('admin/admin_master', $data);

        }
        else{
            $this->show_admin_register_form();
        }

    }

    public function manage_admin_form()
    {
        $admin_data['all_admin'] = $this->admin_model->get_all_admin_info();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_admin_form', $admin_data, true);
        $this->load->view('admin/admin_master', $data);

    }
    public function change_admin_status($admin_id,$status)
    {
        $this->admin_model->change_admin_status($admin_id,$status);
        redirect('manage-admin');

    }

    public function edit_admin($admin_id)
    {
        $data['admin_data'] = $this->admin_model->edit_admin_details($admin_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_admin_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_admin()
    {
        $this->admin_model->update_admin();

        redirect('manage-admin');

    }

    public function delete_admin($admin_id)
    {
        $this->admin_model->delete_admin($admin_id);

        redirect('manage-admin');

    }



}