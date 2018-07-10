<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital_model extends CI_Model
{

    public function save_hospital()
    {

        $data['hospital_name'] = $this->input->post('hospitalName',true);
        $data['doc_image'] =$this->input->post('docImage',true);
        $data['doctor_name'] = $this->input->post('docName',true);
        $data['doctor_category'] = $this->input->post('docCategory',true);
        $data['hospital_desc'] = $this->input->post('hosDesc',true);
        $data['cabin_desc'] = $this->input->post('cabDesc',true);
        $data['cabin_charge'] = $this->input->post('cabCharge',true);
        $data['hospital_contact'] = $this->input->post('hosContact',true);
        $data['hospital_location'] = $this->input->post('hosLoc',true);
        $data['hospital_status'] = 1;

        $this->db->insert('tbl_hospital',$data);

    }

    public function select_all_hospitals()
    {
        $result= $this->db->select('*')
            ->from('tbl_hospital')
            ->get()
            ->result();

        return $result;
    }

    public function change_hospital_status($hospital_id,$status)
    {
        $data['hospital_status'] = $status;
        $this->db->where('hospital_id',$hospital_id);
        $this->db->update('tbl_hospital',$data);
    }

    public function view_hospital($hospital_id)
    {
        $result= $this->db->select('*')
            ->from('tbl_hospital')
            ->where('hospital_id', $hospital_id)
            ->get()
            ->row();

        return $result;
    }

    public function edit_hospital($hospital_id)
    {
        $result= $this->db->select('*')
            ->from('tbl_hospital')
            ->where('hospital_id', $hospital_id)
            ->get()
            ->row();

        return $result;
    }

    public function update_hospital($doctor_image)
    {

        $data['hospital_name'] = $this->input->post('hospitalName',true);
        $data['doc_image'] =$doctor_image;
        $data['doctor_name'] = $this->input->post('docName',true);
        $data['doctor_category'] = $this->input->post('docCategory',true);
        $data['hospital_desc'] = $this->input->post('hosDesc',true);
        $data['cabin_desc'] = $this->input->post('cabDesc',true);
        $data['cabin_charge'] = $this->input->post('cabCharge',true);
        $data['hospital_contact'] = $this->input->post('hosContact',true);
        $data['hospital_location'] = $this->input->post('hosLoc',true);

        $hospital_id =$this->input->post('hospitalId',true);

        $this->db->where('hospital_id',$hospital_id)
                 ->update('tbl_hospital',$data);

    }



    public function delete_hospital_by_id($hospital_id)
    {
        $this->db->where('hospital_id',$hospital_id)
            ->delete('tbl_hospital');
    }

}