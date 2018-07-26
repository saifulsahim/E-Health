<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('welcome_model');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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


    public function add_donor_master()
    {
        $data = array();
        $data['blood_donor_list'] =$this->load->view('pages/blood_donor_list','',true);
        $this->load->view('pages/blood_donor_form',$data);

    }

    public function hospital_master()
    {
        $data = array();
        $data['hospital_list'] =$this->welcome_model->get_all_active_hospitals();
        $this->load->view('pages/hospital_master',$data);
    }


    public function add_hospital_doctors($id)
    {

        $data = array();
        $data['hospital_doctor_list'] =$this->welcome_model->get_all_active_hospital_doctors($id);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->load->view('pages/hospital_doctor_master',$data);
    }

    public function a_positive()
    {
        $data = array();
        $data['all_a_positive_donor'] = $this->welcome_model->all_active_a_positive_donors('A+');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/a_positive',$data);
    }

    public function a_negative()
    {
        $data = array();
        $data['all_a_negative_donor'] = $this->welcome_model->all_active_a_negative_donors('A-');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/a_negative',$data);

    }


    public function b_positive()
    {
        $data = array();
        $data['all_b_positive_donor'] = $this->welcome_model->all_active_b_positive_donors('B+');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/b_positive',$data);
    }

    public function b_negative()
    {
        $data = array();
        $data['all_b_negative_donor'] = $this->welcome_model->all_active_b_negative_donors('B-');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/b_negative',$data);

    }


    public function o_positive()
    {
        $data = array();
        $data['all_o_positive_donor'] = $this->welcome_model->all_active_o_positive_donors('O+');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/o_positive',$data);
    }


    public function o_negative()
    {
        $data = array();
        $data['all_o_negative_donor'] = $this->welcome_model->all_active_o_negative_donors('O-');

//        echo '<pre>';
//        print_r($data);
//        exit();

        $this->load->view('pages/o_negative',$data);

    }



    public function ab_positive()
    {
        $data = array();
        $data['all_ab_positive_donor'] = $this->welcome_model->all_active_ab_positive_donors('AB+');

        $this->load->view('pages/ab_positive',$data);
    }

    public function ab_negative()
    {
        $data = array();
        $data['all_ab_negative_donor'] = $this->welcome_model->all_active_ab_negative_donors('AB-');

        $this->load->view('pages/ab_negative',$data);

    }

    public function add_doctor_master()
    {
        $data = array();
        $data['all_active_doctors_cardiology'] = $this->welcome_model->all_active_doctors(3);
        $data['all_active_doctors_neurology'] = $this->welcome_model->all_active_doctors(2);
        $data['all_active_doctors_pathology'] = $this->welcome_model->all_active_doctors(1);
        $data['all_active_doctors_orthopedics'] = $this->welcome_model->all_active_doctors(4);

        $this->load->view('pages/doctor_list',$data);
    }

    public function add_doc_profile($doc_id)
    {
        $data = array();
        $data['doc_info'] = $this->welcome_model->all_active_doctors_profile($doc_id);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->load->view('pages/doctor_profile',$data);
    }

    public function add_ambulance_master()
    {
        $data = array();
        $data['amb_info'] = $this->welcome_model->all_active_ambulances();
//        echo '<pre>';
//        print_r($data);
//        exit();
        $this->load->view('pages/ambulance_master',$data);

    }


}
