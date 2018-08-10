<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

    public function get_admin_details($admin_email)
    {
        $admin_details = $this->db->select('*')
                                  ->from('tbl_admin')
                                  ->where('admin_email',$admin_email)
                                  ->get()
                                  ->row();

//        $query = $this->db->last_query();
//        print_r($query);
//        exit();
        return $admin_details;


    }

    public function register_new_admin($admin_image)
    {
        $data['admin_name'] =$this->input->post('adminName',true);
        $data['admin_email'] =$this->input->post('adminEmail',true);
        $data['admin_role'] = $this->input->post('adminRole', true);
        $data['admin_image'] = $admin_image;

        $admin_password =$this->input->post('adminPassword',true);
        $encrypted_password = password_hash($admin_password,PASSWORD_DEFAULT);
        $data['admin_password']= $encrypted_password;

//        $data['admin_password'] = password_hash($this->input->post('admin_password',true),PASSWORD_DEFAULT);

        $data['admin_status'] = 1;


        $this->db->insert('tbl_admin',$data);
    }

    public function get_all_admin_info()
    {
       $result =  $this->db->select('*')
                 ->from('tbl_admin')
                 ->get()
                 ->result();

       return $result;
    }

    public function change_admin_status($admin_id,$status)
    {
        $data['admin_status'] = $status;
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin',$data);
    }

    public function edit_admin_details($admin_id)
    {

        $result =$this->db->select('*')
                      ->from('tbl_admin')
                      ->where('admin_id',$admin_id)
                      ->get()
                      ->row();
        return $result;

    }

    public function update_admin($admin_image)
    {
        $data = array();
        $data['admin_name'] = $this->input->post('adminName', true);
        $data['admin_email'] = $this->input->post('adminEmail', true);
        $data['admin_role'] = $this->input->post('adminRole', true);
        $data['admin_image'] = $admin_image;
        $password = $this->input->post('adminPassword', true);

        $confirm_password = $this->input->post('confirmPassword', true);
        $admin_id = $this->input->post('adminId');


        // print_r($password);
        // print_r($admin_id);
        // exit();






        if (!empty($password)) {
            if ($password == $confirm_password) {
                $data['admin_password'] = password_hash($password, PASSWORD_DEFAULT);
                $this->db->where('admin_id', $admin_id);
                $this->db->update('tbl_admin', $data);
            } else {
                $this->session->set_flashdata('message', 'Password and Confirm password do not match');
                redirect("admin/edit_admin/$admin_id");
            }
        } else {
            $admin_password = $this->db->select('admin_password')->from('tbl_admin')->where('admin_id', $admin_id)->get()->row();
            $data['admin_password'] = $admin_password->admin_password;
        }

        // print_r($data['admin_password']);
        // exit();
        $this->db->where('admin_id', $admin_id)
            ->update('tbl_admin', $data);


    }

    public function delete_admin($admin_id)
    {
        $this->db->where('admin_id',$admin_id)
                 ->delete('tbl_admin');

    }
    public function get_record($id)
    {
        return $this->db->where('admin_id', $id)->get('tbl_admin')->row();
    }

}