<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Doctor_model extends CI_Model
{



//    public function upload_doctor_image(){
//
//        $config['upload_path']   = './uploads/';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size']      = '10000';//kb
//        $config['max_width']     = '2024';
//        $config['max_height']    = '1000';
//
//
//        $this->load->library('upload',$config);
//        if($this->upload->do_upload('docImage')){
//            $data = $this->upload->data();
//            $image_path= "uploads/$data[file_name]";
//            return $image_path;
//
//        }else{
//            $error=  $this->upload->display_errors();
//            print_r($error);
//        }
//    }

    public function save_doctor($doctor_image)
    {

        $doctor_data['doc_name'] =$this->input->post('docName',true);

        $doctor_data['doc_email'] =$this->input->post('docEmail',true);
        $doctor_data['doc_mobile_no'] =$this->input->post('docMobileNo',true);
        $doctor_data['doc_qualification'] = $this->input->post('docQual',true);
        $doctor_data['doc_designation'] =$this->input->post('docDesignation',true);
        $doctor_data['doc_category'] =$this->input->post('docCategory',true);
        $doctor_data['doc_chamber']=$this->input->post('docChamber',true);
        $doctor_data['doc_birth_date'] =$this->input->post('docBirthDate',true);
        $doctor_data['doc_fee'] =$this->input->post('docFees',true);
        $doctor_data['doc_join_date'] =$this->input->post('docJoinDate',true);
        $doctor_data['doc_status'] =1;

        $doctor_data['doc_birth_date'] = date('Y-m-d', strtotime($doctor_data['doc_birth_date']));
        $doctor_data['doc_join_date'] = date('Y-m-d', strtotime($doctor_data['doc_join_date']));
        //$tDate = date('Y-m-d', strtotime($toDate));


        $doctor_data['doc_image'] =$doctor_image;

        $this->db->insert('tbl_doctor',$doctor_data);

//        echo '<pre>';
//        print_r($doctor_data);
//        exit();

    }

    public function select_all_doctors()
    {
        $result= $this->db->select('*')
            ->from('tbl_doctor')
            ->get()
            ->result();

        return $result;
    }

    public function change_doctor_status($doctor_id,$status)
    {
        $data['doc_status'] = $status;
        $this->db->where('doc_id',$doctor_id);
        $this->db->update('tbl_doctor',$data);
    }

    public function view_doctor_details($doctor_id)
    {

        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_id', $doctor_id)
            ->get()
            ->row();
        return $result;
    }


    public function edit_doctor_details($doctor_id)
    {

        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_id', $doctor_id)
            ->get()
            ->row();
        return $result;
    }


    function update_doctor($doctor_image){

        $doctor_data =array();
        $doctor_id = $this->input->post('docId',TRUE);
        $doctor_data['doc_name'] =$this->input->post('docName',true);
        $doctor_data['doc_email'] =$this->input->post('docEmail',true);
        $doctor_data['doc_mobile_no'] =$this->input->post('docMobileNo',true);
        $doctor_data['doc_qualification'] = $this->input->post('docQual',true);
        $doctor_data['doc_designation'] =$this->input->post('docDesignation',true);
        $doctor_data['doc_category'] =$this->input->post('docCategory',true);
        $doctor_data['doc_chamber']=$this->input->post('docChamber',true);
        $doctor_data['doc_birth_date'] =$this->input->post('docBirthDate',true);
        $doctor_data['doc_fee'] =$this->input->post('docFees',true);
        $doctor_data['doc_join_date'] =$this->input->post('docJoinDate',true);
        $doctor_data['doc_status'] =1;
        $doctor_data['doc_image']= $doctor_image;

        $doctor_data['doc_birth_date'] = date('Y-m-d', strtotime($doctor_data['doc_birth_date']));
        $doctor_data['doc_join_date'] = date('Y-m-d', strtotime($doctor_data['doc_join_date']));




//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->db->where('doc_id',$doctor_id);
        $this->db->update('tbl_doctor',$doctor_data);

    }


    public function delete_doctor_by_id($doctor_id)
    {
        $this->db->where('doc_id',$doctor_id)
            ->delete('tbl_doctor');

    }

    public function  get_all_active_doctors(){

        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_status',1)
            ->get()->result();
        return $result;
    }
    public function get_all_doctor_categories()
    {
        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_status',1)
            ->get()->result();
        return $result;
    }

    public function get_all_active_doctors_images()
    {
        $result = $this->db->select('*')
            ->from('tbl_doctor')
            ->where('doc_status',1)
            ->get()->result();
        return $result;
    }



}