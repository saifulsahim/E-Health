<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hospital extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($this->session->admin_id) && ($this->session->admin_status !==1))
        {

            redirect('admin');
        }
        $this->load->model('hospital_model');
    }

    public function add_hospital()
    {
        $data = array();
        //$data['doctor_image']= $this->doctor_model->get_all_active_doctors_images();
        //$data['cabin_charge'] = $this->cabin_model->get_all_active_charges();
        $data['cabin_info'] =$this->cabin_model->get_all_active_cabins();
        $data['doctor_info'] = $this->doctor_model->get_all_active_doctors();
        //$data['doctor_category'] = $this->doctor_model->get_all_doctor_categories();
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_hospital_form',$data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_hospital()
    {
        $this->hospital_model->save_hospital();
        $sdata =array();
        $sdata['message'] = "Added Hospital Information Successfully !";
        $this->session->set_userdata($sdata);
        redirect('add-hospital');
    }

    public function manage_hospital()
    {
        $data = array();
        $data['hospital_data'] =$this->hospital_model->select_all_hospitals();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_hospital_form',$data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function change_hospital_status($hospital_id,$status)
    {
        $this->hospital_model->change_hospital_status($hospital_id,$status);
        redirect('manage-hospital');
    }

    public function view_hospital($hospital_id)
    {
        $data = array();
        $data['hospital_info'] =$this->hospital_model->view_hospital($hospital_id);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['dashboard'] = $this->load->view('admin/admin_pages/view_hospital_form',$data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function edit_hospital($hospital_id)
    {
        $data = array();
        $data['cabin_charge'] = $this->cabin_model->get_all_active_charges();
        $data['cabin_info'] =$this->cabin_model->get_all_active_cabins();
        $data['doctor_info'] = $this->doctor_model->get_all_active_doctors();
        $data['doctor_category'] = $this->doctor_model->get_all_doctor_categories();
        $data['hospital_info'] =$this->hospital_model->edit_hospital($hospital_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_hospital_form',$data, true);
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



    public function update_hospital()
    {

        $this->hospital_model->update_hospital();
        $sdata =array();
        $sdata['message'] = "Update Hospital Information Successfully !";
        $this->session->set_userdata($sdata);
        $hospital_id = $this->input->post('hospitalId',true);
        redirect('edit-hospital/'.$hospital_id);



//        if ($_FILES['docImage']['name'] ==  '' || $_FILES['docImage']['size'] == 0)
//        {
//            $doctor_image =$this->input->post('docOldImage',true);
//            $this->hospital_model->update_hospital($doctor_image);
//            $sdata =array();
//            $sdata['message'] = "Update Hospital Information Successfully !";
//            $this->session->set_userdata($sdata);
//            $hospital_id = $this->input->post('hospitalId',true);
//            redirect('edit-hospital/'.$hospital_id);
//
//        }
//        else{
//
//            $doctor_image = $this->upload_doctor_image();
//            $this->hospital_model->update_hospital($doctor_image);
//            unlink($this->input->post('docOldImage',true));
//            $sdata =array();
//            $sdata['message'] = "Update Hospital Information Successfully !";
//            $this->session->set_userdata($sdata);
//            $hospital_id = $this->input->post('hospitalId',true);
//            redirect('edit-hospital/'.$hospital_id);
//        }


    }

    public function delete_hospital($hospital_id)

    {
        $this->hospital_model->delete_hospital_by_id($hospital_id);
        redirect('manage-hospital');

    }
}