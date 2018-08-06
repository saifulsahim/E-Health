<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blood_donor extends CI_Model
{

    public function save_donor()
    {
        $data['donor_name'] =$this->input->post('donorName',true);
        $data['donor_blood_group'] =$this->input->post('donorBloodGroup',true);
        $data['donor_email'] =$this->input->post('donorEmail',true);
        $data['donor_mobile_no'] =$this->input->post('donorMobileNo',true);
        $data['donor_address'] =$this->input->post('donorAddress',true);
        $data['donor_status'] = 1;


        $this->db->insert('tbl_donor',$data);


    }

    public function select_all_donors()
    {
        $result= $this->db->select('*')
                      ->from('tbl_donor')
                      ->get()
                      ->result();

        return $result;

    }

    public function change_donor_status($donor_id,$status)
    {
        $data['donor_status'] = $status;
        $this->db->where('donor_id',$donor_id);
        $this->db->update('tbl_donor',$data);
    }

    public function edit_donor_details($donor_id)
    {

        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where('donor_id', $donor_id)
            ->get()
            ->row();
        return $result;
    }

    public function get_donors_by_blood_group($blood_group)
    {

        $result = $this->db->select('*')
            ->from('tbl_donor')
            ->where('donor_blood_group', $blood_group)
            ->get()
            ->result();
        return $result;
    }

    public function update_donor()
    {
        $data = array();
        $data['donor_name'] = $this->input->post('donorName',true);
        $data['donor_blood_group'] =$this->input->post('donorBloodGroup',true);
        $data['donor_email'] = $this->input->post('donorEmail',true);
        $data['donor_mobile_no'] =$this->input->post('donorMobileNo',true);
        $data['donor_address'] =$this->input->post('donorAddress',true);

        $donor_id = $this->input->post('donorId');

        $this->db->where('donor_id',$donor_id)
            ->update('tbl_donor',$data);

    }

    public function delete_donor($donor_id)
    {
        $this->db->where('donor_id',$donor_id)
            ->delete('tbl_donor');

    }


}