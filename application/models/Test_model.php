<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model
{


    public function save_test()
    {
        $data['test_name'] =$this->input->post('testName',true);
        //$data['doc_image'] =$this->input->post('docImage',true);
        $data['doc_id'] =$this->input->post('docName',true);
        //$data['doc_category'] =$this->input->post('docCategory',true);
        $data['test_price'] =$this->input->post('testPrice',true);
        $data['test_desc'] =$this->input->post('testDesc',true);
        $data['test_status'] = 1 ;

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->db->insert('tbl_test',$data);

    }

    public function select_all_tests()
    {
        $result= $this->db->select('*')
            ->from('tbl_test')
            ->get()
            ->result();

        return $result;
    }

    public function change_test_status($test_id,$status)
    {
        $data['test_status'] = $status;
        $this->db->where('test_id',$test_id);
        $this->db->update('tbl_test',$data);
    }

    public function view_test($test_id)
    {
        $result= $this->db->select('*')
            ->from('tbl_test')
            ->where('test_id', $test_id)
            ->get()
            ->row();

        return $result;
    }

    public function edit_test($test_id)
    {
        $result= $this->db->select('*')
            ->from('tbl_test')
            ->where('test_id', $test_id)
            ->get()
            ->row();

        return $result;
    }

    public function update_test()
    {
        $data['test_name'] =$this->input->post('testName',true);
        //$data['doc_image'] =$doctor_image;
        $data['doc_id'] =$this->input->post('docName',true);
        //$data['doc_name'] =$this->input->post('docName',true);
        //$data['doc_category'] =$this->input->post('docCategory',true);
        $data['test_price'] =$this->input->post('testPrice',true);
        $data['test_desc'] =$this->input->post('testDesc',true);

        $test_id =$this->input->post('testId',true);

        $this->db->where('test_id',$test_id)
            ->update('tbl_test',$data);

    }

    public function delete_test_by_id($test_id)
    {
        $this->db->where('test_id',$test_id)
            ->delete('tbl_test');
    }

}