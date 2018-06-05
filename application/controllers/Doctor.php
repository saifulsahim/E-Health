<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($this->session->admin_id) && ($this->session->admin_status !==1))
        {

            redirect('admin');
        }
        $this->load->model('doctor_model');
    }


    public function add_doctor()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_doctor_form', '', true);
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

    public function save_doctor()
    {
        $doctor_image = $this->upload_doctor_image();
        $this->doctor_model->save_doctor($doctor_image);
        $this->session->set_userdata('message', 'Doctor saved successfully');
        redirect('add-doctor');

    }

    public function manage_doctor()
    {

        $data = array();
        $data['doctor_data'] = $this->doctor_model->select_all_doctors();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_doctor_form', $data, true);
        $this->load->view('admin/admin_master', $data);

    }

    public function change_doctor_status($doctor_id,$status)
    {
        $this->doctor_model->change_doctor_status($doctor_id,$status);
        redirect('manage-doctor');

    }

    public function view_doctor($doctor_id)
    {
        $data['doctor_info'] = $this->doctor_model->view_doctor_details($doctor_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/view_doctor_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }


    public function edit_doctor($doctor_id)
    {
        $data['doctor_data'] = $this->doctor_model->edit_doctor_details($doctor_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_doctor_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_doctor()
    {
//        echo '<pre>';
//        print_r($_FILES);

        if ($_FILES['docImage']['name'] ==  '' || $_FILES['docImage']['size'] == 0)
        {
            $doctor_image =$this->input->post('docOldImage',true);
            $this->doctor_model->update_doctor($doctor_image);
            $sdata =array();
            $sdata['message'] = "Update Doctor Information Successfully !";
            $this->session->set_userdata($sdata);
            $doctor_id = $this->input->post('docId',true);
            redirect('edit-doctor/'.$doctor_id);

        }
        else{

            $doctor_image = $this->upload_doctor_image();
            $this->doctor_model->update_doctor($doctor_image);
            unlink($this->input->post('docOldImage',true));
            $sdata =array();
            $sdata['message'] = "Update Doctor Information Successfully !";
            $this->session->set_userdata($sdata);
            $doctor_id = $this->input->post('docId',true);
            redirect('edit-doctor/'.$doctor_id);
        }
    }

    public function delete_doctor($doctor_id)
    {
        $this->doctor_model->delete_doctor_by_id($doctor_id);

        redirect('manage-doctor');

    }

}