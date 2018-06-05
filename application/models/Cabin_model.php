<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabin_model extends CI_Model
{

    public function save_cabin()
    {
        $data['cabin_capacity'] =$this->input->post('cabinCapacity',true);
        $data['cabin_desc'] =$this->input->post('cabinDesc',true);
        $data['cabin_charge'] =$this->input->post('cabinCharge',true);
        $data['cabin_status'] =1;

        $this->db->insert('tbl_cabin',$data);
    }

    public function select_all_cabines()
    {
        $result= $this->db->select('*')
            ->from('tbl_cabin')
            ->get()
            ->result();

        return $result;

    }

    public function change_cabin_status($cabin_id,$status)
    {
        $data['cabin_status'] = $status;
        $this->db->where('cabin_id',$cabin_id);
        $this->db->update('tbl_cabin',$data);
    }

    public function view_cabin($cabin_id)
    {
        $result= $this->db->select('*')
            ->from('tbl_cabin')
            ->where('cabin_id', $cabin_id)
            ->get()
            ->row();

        return $result;

    }

    public function edit_cabin_info($cabin_id)
    {
        $result= $this->db->select('*')
            ->from('tbl_cabin')
            ->where('cabin_id', $cabin_id)
            ->get()
            ->row();

        return $result;

    }


    public function update_cabin_by_id()
    {
        $data['cabin_capacity'] =$this->input->post('cabinCapacity',true);
        $data['cabin_desc'] =$this->input->post('cabinDesc',true);
        $data['cabin_charge'] =$this->input->post('cabinCharge',true);

        $cabin_id = $this->input->post('cabinId',true);

        $this->db->where('cabin_id',$cabin_id)
                 ->update('tbl_cabin',$data);

    }

    public function get_all_active_cabins()
    {
        $result = $this->db->select('*')
            ->from('tbl_cabin')
            ->where('cabin_status',1)
            ->get()->result();
        return $result;
    }

    public function get_all_active_charges()
    {
        $result = $this->db->select('*')
            ->from('tbl_cabin')
            ->where('cabin_status',1)
            ->get()->result();
        return $result;
    }

    public function delete_cabin_by_id($cabin_id)
    {

        $this->db->where('cabin_id',$cabin_id)
            ->delete('tbl_cabin');

    }

}