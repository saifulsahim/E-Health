<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('test_model');
    }

    public function add_test()
    {

        $data= array();
        $data['doctor_image']= $this->doctor_model->get_all_active_doctors_images();

        $data['doctor_data']= $this->doctor_model->get_all_active_doctors();
        $data['doctor_category'] = $this->doctor_model->get_all_doctor_categories();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_test_form',$data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_test()
    {
        $this->test_model->save_test();
        $sdata =array();
        $sdata['message'] = "Added Test Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('add-test');
    }



//    public function get_record($doc_id)
//    {
//        return $this->db->where('doc_id', $doc_id)->get()->row();
//    }



    public function manage_test()
    {
        $data= array();
        $data['test_data'] = $this->test_model->select_all_tests();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_test_form',$data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function change_test_status($test_id,$status)
    {
        $this->test_model->change_test_status($test_id,$status);
        redirect('manage-test');
    }

    public function view_test($test_id)
    {
        $data = array();
        $data['test_info'] =$this->test_model->view_test($test_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/view_test_form',$data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_test($test_id)
    {
        $data = array();
        $data['doctor_info'] = $this->doctor_model->get_all_active_doctors();
        $data['doctor_category'] = $this->doctor_model->get_all_doctor_categories();
        $data['test_info'] =$this->test_model->edit_test($test_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_test_form',$data, true);
        $this->load->view('admin/admin_master', $data);
    }


    public function update_test()
    {
        $this->test_model->update_test();
        $sdata =array();
        $sdata['message'] = "Updated Test Information Successfully !";
        $this->session->set_userdata($sdata);

        $test_id =$this->input->post('testId',true);
        redirect('edit-test/'.$test_id);
    }

    public function delete_test($test_id)
    {
        $this->test_model->delete_test_by_id($test_id);
        redirect('manage-test');
    }
}