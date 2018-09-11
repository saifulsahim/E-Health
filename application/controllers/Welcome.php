<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('master');
    }

    public function manage_blog()
    {
        $data['posts'] = $this->blog_model->select_all_blogs();

        $this->load->view('pages/blog_list', $data);
    }

    public function view_blog($blog_id)
    {
        $data['blog_id'] = $blog_id;
        $data['all_comments'] = $this->blog_model->select_all_comments($blog_id);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['post'] = $this->blog_model->select_blog($blog_id);

//        echo $data['blog_id'];
//        exit();
        $this->blog_model->inc_blog_view($blog_id, $data['post']->blog_view);

        $this->load->view('pages/blog_page', $data);
    }


    public function omnisearch()
    {
        $data = array();
        $data['query_string'] = $this->input->get('q', true);

        $query_string = strtolower($data['query_string']);


        /**
         * 1. doctor name -> tbl_doctor.name
         * 2. Symptoms -> tbl_doctor.symptoms
         * 3. Disease -> tbl_doctor.disease
         * 4. Blood_Group -> tbl_donor.blood_group (completed)
         */

        if ($query_string == 'a+' || $query_string == 'a-' || $query_string == 'b+' || $query_string == 'b-'
            || $query_string == 'o+' || $query_string == 'o-' || $query_string == 'ab+' || $query_string == 'ab-'
        ) {

            $data['category'] = 1;

            $data['result_title'] = "Blood Donor Results for " . strtoupper($query_string);
            $data['results'] = $this->blood_donor->get_donors_by_blood_group($query_string);

        } else {

            $data['category'] = 2;

            $data['result_title'] = "Doctor List";
            $data['results'] = $this->doctor_model->get_doctors_for_query($query_string);

            $data['recommended_doctors'] = $this->doctor_model->get_recommended_doctors();

        }

//        echo '<pre>';
//        var_dump($data);

        $this->load->view('pages/search_results_list', $data);

//        if($data['query_string'] == null)
//        {
//            echo 'Nothing Found';
//        }


    }


    public function add_donor_master()
    {
        $data = array();
        $data['blood_donor_list'] = $this->load->view('pages/blood_donor_list', '', true);
        $this->load->view('pages/blood_donor_form', $data);

    }

    public function hospital_master()
    {
        $data = array();
        $data['hospital_list'] = $this->welcome_model->get_all_active_hospitals();
        $this->load->view('pages/hospital_master', $data);
    }


    public function add_hospital_doctors($id)
    {

        $data = array();
        $data['hospital_doctor_list'] = $this->welcome_model->get_all_active_hospital_doctors($id);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->load->view('pages/hospital_doctor_master', $data);
    }

    public function a_positive()
    {
        $data = array();
        $data['all_a_positive_donor'] = $this->welcome_model->all_active_a_positive_donors('A+');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/a_positive', $data);
    }

    public function a_negative()
    {
        $data = array();
        $data['all_a_negative_donor'] = $this->welcome_model->all_active_a_negative_donors('A-');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/a_negative', $data);

    }


    public function b_positive()
    {
        $data = array();
        $data['all_b_positive_donor'] = $this->welcome_model->all_active_b_positive_donors('B+');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/b_positive', $data);
    }

    public function b_negative()
    {
        $data = array();
        $data['all_b_negative_donor'] = $this->welcome_model->all_active_b_negative_donors('B-');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/b_negative', $data);

    }


    public function o_positive()
    {
        $data = array();
        $data['all_o_positive_donor'] = $this->welcome_model->all_active_o_positive_donors('O+');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/o_positive', $data);
    }


    public function o_negative()
    {
        $data = array();
        $data['all_o_negative_donor'] = $this->welcome_model->all_active_o_negative_donors('O-');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/o_negative', $data);

    }


    public function ab_positive()
    {
        $data = array();
        $data['all_ab_positive_donor'] = $this->welcome_model->all_active_ab_positive_donors('AB+');

        $this->load->view('pages/ab_positive', $data);
    }

    public function ab_negative()
    {
        $data = array();
        $data['all_ab_negative_donor'] = $this->welcome_model->all_active_ab_negative_donors('AB-');

        $this->load->view('pages/ab_negative', $data);

    }

    public function add_doctor_master()
    {
        $data = array();
        $data['all_active_doctors_cardiology'] = $this->welcome_model->all_active_doctors(3);
        $data['all_active_doctors_neurology'] = $this->welcome_model->all_active_doctors(2);
        $data['all_active_doctors_pathology'] = $this->welcome_model->all_active_doctors(1);
        $data['all_active_doctors_orthopedics'] = $this->welcome_model->all_active_doctors(4);
        $data['all_active_doctors_medicine'] = $this->welcome_model->all_active_doctors(7);

        $this->load->view('pages/doctor_list', $data);
    }

    public function add_doc_profile($doc_id)  # ----------------------------------------------------------------
    {
        $data = array();
        $data['doc_info'] = $this->welcome_model->all_active_doctors_profile($doc_id);

        $data['recommended_doctors'] = $this->doctor_model->get_recommended_doctors_by_category($data['doc_info']->doc_category);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->load->view('pages/doctor_profile', $data);
    }

    public function add_ambulance_master()
    {
        $data = array();
        $data['amb_info'] = $this->welcome_model->all_active_ambulances();
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->load->view('pages/ambulance_master', $data);

    }


    public function show_doctor_register_form()
    {
        //$data = array();
        $this->load->view('pages/doc_login_signup');
    }

    public function add_login_signup()
    {


        $data = array();
        $data['dept_info'] = $this->doctor_model->get_all_active_depts();

        $data['hospital_info'] = $this->hospital_model->get_all_active_hospitals();
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->load->view('pages/doc_login_signup', $data);

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
        $this->form_validation->set_rules('docName', 'Doctor Name', 'required|max_length[20]');
        //$this->form_validation->set_rules('adminEmail','Email Address', 'required|max_length[255]|is_unique[tbl_admin.admin_email]' );
        $this->form_validation->set_rules('docMobileNo', 'Doctor Mobile No', 'required|max_length[11]');
        $this->form_validation->set_rules('docPassword', 'Doctor Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|min_length[6]|matches[docPassword]');


        if ($this->form_validation->run()) {


            $doctor_image = $this->upload_doctor_image();
            $insert_id = $this->doctor_model->save_doctor($doctor_image);
            $this->doctor_model->save_doctor_for_login($insert_id, $doctor_image);
            $this->session->set_flashdata('message', "<div class='alert alert-success'>Your Information has been Taken. Please wait for Admin's Approval</div>");
            redirect('welcome/add_login_signup');


        } else {
            $this->show_doctor_register_form();
        }

    }



    public function show_patient_register_form()
    {
        $this->load->view('pages/patient_login_signup');

    }

    public function save_patient()
    {

        $this->form_validation->set_rules('patientName', 'Patient Name', 'required|max_length[20]');
        //$this->form_validation->set_rules('adminEmail','Email Address', 'required|max_length[255]|is_unique[tbl_admin.admin_email]' );
        $this->form_validation->set_rules('patientMobileNo', ' Mobile No', 'required|max_length[11]');
        $this->form_validation->set_rules('patientPassword', 'Patient Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|min_length[6]|matches[patientPassword]');

        if ($this->form_validation->run()) {

            $insert_id = $this->patient_model->save_patient();
            $this->patient_model->save_patient_for_login($insert_id);
            $this->session->set_userdata('message', "<div class='alert alert-success'>Record Insert Successfully</div>");
            redirect('welcome/add_patient_login');
        } else {

            $this->show_patient_register_form();
        }
    }


    public function ajax_email_check($email_address = null)
    {
        if ($email_address == NULL) {
            echo "Email Address Required";
            return;

        }
        $result = $this->welcome_model->ajax_email_address_check($email_address);
        if ($result) {
            echo "Already Exists !";

        } else {

            echo "Available";
        }
    }



    public function ajax_email_check_patient($email_address = null)
    {

        if ($email_address == NULL) {
            echo "Email Address Required";
            return;

        }
        $result = $this->welcome_model->ajax_email_address_check_patient($email_address);
        if ($result) {
            echo "Already Exists !";

        } else {

            echo "Available";
        }
    }


    public function add_patient_login()
    {
        $data = array();
        $this->load->view('pages/patient_login_signup', $data);
    }

    public function main_logout()
    {

        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->load->view('master');
    }


}
