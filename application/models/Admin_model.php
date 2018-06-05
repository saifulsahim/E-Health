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

        return $admin_details;

    }

    public function register_new_admin()
    {
        $data['admin_name'] =$this->input->post('adminName',true);
        $data['admin_email'] =$this->input->post('adminEmail',true);
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

    public function update_admin()
    {
        $data = array();
        $data['admin_name'] = $this->input->post('adminName',true);
        $data['admin_email'] = $this->input->post('adminEmail',true);
        $password = $this->input->post('adminPassword',true);
        $confirm_password = $this->input->post('confirmPassword',true);
        if($password == $confirm_password) {
            $data['admin_password'] = password_hash($this->input->post('adminPassword', true), PASSWORD_DEFAULT);
            $admin_id = $this->input->post('adminId');

            $this->db->where('admin_id',$admin_id)
                ->update('tbl_admin',$data);
        } else {
            redirect('admin');
        }

    }

    public function delete_admin($admin_id)
    {
        $this->db->where('admin_id',$admin_id)
                 ->delete('tbl_admin');

    }
}