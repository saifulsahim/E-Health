<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
    }


    public function save_comments()
    {

        $this->blog_model->save_comments();
    }

    private function upload_user_image()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';//kb
        $config['max_width'] = '2024';
        $config['max_height'] = '1000';


        $this->load->library('upload', $config);
        if ($this->upload->do_upload('userImage')) {
            $data = $this->upload->data();
            $image_path = "uploads/$data[file_name]";
            return $image_path;

        } else {
            $error = $this->upload->display_errors();
            print_r($error);
        }
    }

    public function save_user()
    {
        $user_image = $this->upload_user_image();

        $this->blog_model->save_user($user_image);
        $this->session->set_userdata('message', "<div class='alert alert-success'>Record Insert Successfully</div>");
        redirect('blog/add_user_sign_in');
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

    public function edit_blog($id)
    {
        $data = array();
        $data['blog_info'] =$this->blog_model->edit_blog_info($id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_blog_form', $data, true);
        $this->load->view('admin/admin_master', $data);

    }

    public function update_blog()
    {
        $this->blog_model->update_blog_by_id();
        $sdata =array();
        $sdata['message'] = "Update blog Information Successfully !";
        $this->session->set_userdata($sdata);
        $blog_id = $this->input->post('blogId',true);
        redirect('blog/edit_blog/'.$blog_id);
    }


    public function delete_blog($blog_id)
    {
        $this->blog_model->delete_blog_by_id($blog_id);
        redirect('blog/manage_blog');
    }

    public function add_user_sign_in()
    {
        $this->load->view('pages/user_login_signup');
    }



}