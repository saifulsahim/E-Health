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
//        echo '<pre>';
//        print_r($data);
//        exit();

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

    private function upload_doctor_image(){

        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '10000';//kb
        $config['max_width']     = '2024';
        $config['max_height']    = '1000';


        $this->load->library('upload',$config);
        if($this->upload->do_upload('docImage')){
            $data = $this->upload->data();
            $image_path= "uploads/$data[file_name]";
            return $image_path;

        }else{
            $error=  $this->upload->display_errors();
            print_r($error);
        }
    }


    public function update_test()
    {
        //$this->test_model->update_test();

//        echo '<pre>';
//        print_r($_FILES);

        if ($_FILES['docImage']['name'] ==  '' || $_FILES['docImage']['size'] == 0)
        {
            $doctor_image =$this->input->post('docOldImage',true);
            $this->test_model->update_test($doctor_image);
            $sdata =array();
            $sdata['message'] = "Update Test Information Successfully !";
            $this->session->set_userdata($sdata);
            $test_id = $this->input->post('testId',true);
            redirect('edit-test/'.$test_id);

        }
        else{

            $doctor_image = $this->upload_doctor_image();
            $this->test_model->update_test($doctor_image);
            unlink($this->input->post('docOldImage',true));
            $sdata =array();
            $sdata['message'] = "Update Test Information Successfully !";
            $this->session->set_userdata($sdata);
            $test_id = $this->input->post('testId',true);
            redirect('edit-test/'.$test_id);
        }



//        $sdata =array();
//        $sdata['message'] = "Updated Test Information Successfully !";
//        $this->session->set_userdata($sdata);
//
//        $test_id =$this->input->post('testId',true);
//        redirect('edit-test/'.$test_id);
    }

    public function delete_test($test_id)
    {
        $this->test_model->delete_test_by_id($test_id);
        redirect('manage-test');
    }
}