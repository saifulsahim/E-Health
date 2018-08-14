<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{


    public function save_comments()
    {
        $data['message'] = $this->input->post('comments',true);
        $data['blog_id'] = $this->input->post('blogId',true);
        $data['admin_id'] = $this->session->userdata('admin_id');

//        print_r($data);
//        exit();



        $this->db->insert('tbl_post',$data);
    }

    public function select_all_comments($blog_id)
    {
        $result = $this->db->select('*')
            ->from('tbl_post')
            ->where('blog_id',$blog_id)
            ->get()
            ->result();

//        $query = $this->db->last_query();
//        print_r($query);
//        exit();
        return $result;

    }

    public function get_record($id)
    {
        return $this->db->where('admin_id', $id)->get('tbl_admin')->row();
    }



    public function save_user($user_image)
    {
        $data['admin_name'] = $this->input->post('adminName',true);
        $data['admin_email'] = $this->input->post('adminEmail',true);
        //$data['admin_password'] = $this->input->post('userPassword',true);
        $data['admin_image'] = $user_image;
        $data['admin_role'] = "User";
        $data['admin_status'] = 1;

        $admin_password =$this->input->post('adminPassword',true);
        $encrypted_password = password_hash($admin_password,PASSWORD_DEFAULT);
        $data['admin_password']= $encrypted_password;

        $this->db->insert('tbl_admin',$data);

    }


    public function save_blog()
    {

        $data = array();
        $data['admin_id'] = $this->session->userdata('admin_id');
        $data['blog_title'] = $this->input->post('blogTitle', true);
        $data['blog_desc'] = $this->input->post('blogDesc', true);

        $this->db->insert('tbl_blog', $data);

    }

    public function select_all_blogs()
    {
        $result = $this->db->select('*')
            ->from('tbl_blog')
            ->order_by('blog_date desc')
            ->get()
            ->result();

        return $result;
    }

    public function select_all_blogs_for_doctor($admin_id)
    {
        $result = $this->db->select('*')
            ->from('tbl_blog')
            ->where('admin_id', $admin_id)
            ->order_by('blog_date desc')
            ->get()
            ->result();

        return $result;
    }

    public function select_blog($blog_id)
    {
        $result = $this->db->select('*')
            ->from('tbl_blog')
            ->where('blog_id', $blog_id)
            ->get()
            ->row();

        return $result;
    }

    public function inc_blog_view($blog_id, $old_view)
    {
        $result = $this->db->select('*')
            ->from('tbl_blog')
            ->where('blog_id', $blog_id)
            ->get()
            ->row();

        $data['blog_view'] = $old_view + 1;

        $this->db->where('blog_id',$blog_id)
            ->update('tbl_blog',$data);

    }


    public function edit_blog_info($id)
    {
        $result= $this->db->select('*')
            ->from('tbl_blog')
            ->where('blog_id', $id)
            ->get()
            ->row();

        return $result;
    }

    public function update_blog_by_id()
    {

        $data['author_id'] = $this->session->userdata('admin_id');
        $data['blog_title'] = $this->input->post('blogTitle', true);
        $data['blog_desc'] = $this->input->post('blogDesc', true);

        $blog_id = $this->input->post('blogId',true);

        $this->db->where('blog_id',$blog_id)
            ->update('tbl_blog',$data);
    }


    public function delete_blog_by_id($blog_id)
    {
        $this->db->where('blog_id',$blog_id)
            ->delete('tbl_blog');
    }


}