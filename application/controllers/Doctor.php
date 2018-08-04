<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($this->session->admin_id) && ($this->session->admin_status !== 1)) {

            redirect('admin');
        }
        $this->load->model('doctor_model');
    }


    public function doc_login_check()
    {

        $doc_email = $this->input->post('docEmail', true);
//        echo $doc_email;
//        exit();

        $doc_password = $this->input->post('docPassword', true);
//        echo $doc_password;
//        exit();
//        $encrypted_password = password_hash($doc_password,PASSWORD_DEFAULT);
//        $data['doc_password']= $encrypted_password;

//        $encrypt_password = password_hash($encrypted_password, PASSWORD_DEFAULT);
//        echo $encrypt_password;
//        exit();


        $doctor_details = $this->doctor_model->get_doctor_details($doc_email);


//        echo '<pre>';
//        print_r($doctor_details);
//        exit();

        if ($doctor_details) {
            if (password_verify($doc_password, $doctor_details->doc_password)) {
                $session_data['doc_email'] = $doctor_details->doc_email;
                $session_data['doc_id'] = $doctor_details->doc_id;
                $session_data['doc_status'] = $doctor_details->doc_status;
                //$session_data['admin_role'] = $admin_details->admin_role;


                $this->session->set_userdata($session_data);

                redirect('doctor/manage_doctor');

//
//                $data = array();
//                $data['dashboard'] = $this->load->view('dashboard', '', true);
//                $this->load->view('admin_master', $data);


            } else {
                $data['error_message'] = 'Incorrect Email or Password';
                //redirect('doctor/doc_login_check');
                $this->load->view('pages/doc_login_signup', $data);
            }
        } else {
            echo 'Data not found! Please register';

        }
//        }

    }


    public function add_department()
    {

        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_department_form', '', true);
        $this->load->view('admin/admin_master', $data);

    }


    public function save_department()
    {
        $this->doctor_model->save_department();

        $this->session->set_userdata('message', 'Department saved successfully');
        redirect('add-department');
    }


    public function manage_department()
    {
        $data = array();
        $data['dept_data'] = $this->doctor_model->select_all_depts();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_dept_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function change_dept_status($dept_id, $status)
    {
        $this->doctor_model->change_dept_status($dept_id, $status);
        redirect('doctor/manage_department');
    }


    public function edit_dept($dept_id)
    {
        $data['dept_data'] = $this->doctor_model->edit_dept_details($dept_id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_dept_form', $data, true);
        $this->load->view('admin/admin_master', $data);

    }


    public function update_dept()
    {
        $this->doctor_model->update_dept();

        $sdata = array();
        $sdata['message'] = "Update Department Information Successfully !";
        $this->session->set_userdata($sdata);
        $dept_id = $this->input->post('deptId', true);
        redirect('edit-dept/' . $dept_id);
    }


    public function add_doctor()
    {
        $data = array();
        $data['dept_info'] = $this->doctor_model->get_all_active_depts();
        $data['hospital_info'] = $this->hospital_model->get_all_active_hospitals();
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['dashboard'] = $this->load->view('admin/admin_pages/add_doctor_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    private function upload_doctor_image()
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';//kb
        $config['max_width'] = '2024';
        $config['max_height'] = '1000';


        $this->load->library('upload', $config);
        if ($this->upload->do_upload('docImage')) {
            $data = $this->upload->data();
            $image_path = "uploads/$data[file_name]";
            return $image_path;

        } else {
            $error = $this->upload->display_errors();
            print_r($error);
        }
    }

    public function save_doctor()
    {
        $doctor_image = $this->upload_doctor_image();
        $insert_id = $this->doctor_model->save_doctor($doctor_image);
        $this->doctor_model->save_doctor_for_login($insert_id, $doctor_image);
        $this->session->set_userdata('message', "<div class='alert alert-success'>Record Insert Successfully</div>");
        redirect('add-doctor');

    }

    public function manage_doctor()
    {

        $role = $this->session->userdata('admin_role');
        $id = $this->session->userdata('insert_id');
//        echo $role;
//        echo $id;
//        exit();
        $data = array();

        if (($role == "Admin") || ($role == "Moderator")) {
            $data['doctor_data'] = $this->doctor_model->select_all_doctors();
        } else {

            $data['doctor_data'] = $this->doctor_model->get_data_by_user($id);
        }
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_doctor_form', $data, true);
        $this->load->view('admin/admin_master', $data);

    }

    public function change_doctor_status($doctor_id, $status)
    {
        $this->doctor_model->change_doctor_status($doctor_id, $status);
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
        $data['dept_info'] = $this->doctor_model->get_all_active_depts();
        $data['hospital_info'] = $this->hospital_model->get_all_active_hospitals();
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_doctor_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_doctor()
    {
//        echo '<pre>';
//        print_r($_FILES);

        if ($_FILES['docImage']['name'] == '' || $_FILES['docImage']['size'] == 0) {
            $doctor_image = $this->input->post('docOldImage', true);
            $this->doctor_model->update_doctor($doctor_image);
            $sdata = array();
            $sdata['message'] = "Update Doctor Information Successfully !";
            $this->session->set_userdata($sdata);
            $doctor_id = $this->input->post('docId', true);
            redirect('edit-doctor/' . $doctor_id);

        } else {

            $doctor_image = $this->upload_doctor_image();
            $this->doctor_model->update_doctor($doctor_image);
            unlink($this->input->post('docOldImage', true));
            $sdata = array();
            $sdata['message'] = "Update Doctor Information Successfully !";
            $this->session->set_userdata($sdata);
            $doctor_id = $this->input->post('docId', true);
            redirect('edit-doctor/' . $doctor_id);
        }
    }

    public function delete_doctor($doctor_id)
    {
        $this->doctor_model->delete_doctor_by_id($doctor_id);

        redirect('manage-doctor');

    }

}