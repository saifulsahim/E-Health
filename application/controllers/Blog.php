<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
    }


    public function add_blog()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_blog_form', '', true);
        $this->load->view('admin/admin_master', $data);
    }


    public function save_blog()
    {

        $this->blog_model->save_blog();
        $this->session->set_userdata('message', 'Blog saved successfully');
        redirect('blog/add_blog');
    }

    public function manage_blog()
    {
        $data = array();
        $data['blog_data'] = $this->blog_model->select_all_blogs();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_blog_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }




}