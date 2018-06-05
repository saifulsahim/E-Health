<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ambulance_model extends CI_Model
{

    public function save_ambulance()
    {
        $data['amb_name']= $this->input->post('ambName',true);
        $data['amb_contact']= $this->input->post('ambMobileNo',true);
        $data['amb_loc']= $this->input->post('ambLoc',true);

        $data['amb_status'] = 1;

        $this->db->insert('tbl_ambulance',$data);

    }

    public function select_all_ambulance()
    {
        $result= $this->db->select('*')
            ->from('tbl_ambulance')
            ->get()
            ->result();

        return $result;
    }

    public function change_ambulance_status($amb_id,$status){

        $data['amb_status'] = $status;
        $this->db->where('amb_id',$amb_id);
        $this->db->update('tbl_ambulance',$data);
    }

    public function edit_ambulance_details($amb_id)
    {
        $result = $this->db->select('*')
            ->from('tbl_ambulance')
            ->where('amb_id', $amb_id)
            ->get()
            ->row();
        return $result;
    }

    public function update_ambulance()
    {
        $data['amb_name']= $this->input->post('ambName',true);
        $data['amb_contact']= $this->input->post('ambMobileNo',true);
        $data['amb_loc']= $this->input->post('ambLoc',true);

        $amb_id =$this->input->post('ambId',true);

        $this->db->where('amb_id',$amb_id)
            ->update('tbl_ambulance',$data);

    }

    public function delete_ambulance($amb_id)
    {
        $this->db->where('amb_id',$amb_id)
            ->delete('tbl_ambulance');
    }

}