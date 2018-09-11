<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller
{

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

        if (isset($this->session->admin_id)) {
            redirect('admin-dashboard');
        } else {
            $this->load->view('admin/admin_login');
        }


    }


    public function check_admin_login()
    {
        $admin_email = $this->input->post('adminEmail', true);
        $admin_password = $this->input->post('adminPassword', true);
        $type = $this->input->post('type', true);
//        $encrypt_password =password_hash($admin_password, PASSWORD_DEFAULT);
//        echo $encrypt_password;
//        exit();


        $this->load->model('admin_model');

        $admin_details = $this->admin_model->get_admin_details($admin_email);
//        print_r($admin_details);
//        exit();

        if ($admin_details) {
            if (password_verify($admin_password, $admin_details->admin_password)) {

//                print_r($admin_details);
//                exit();

                if ($admin_details->admin_status == 1) {

                    if ($admin_details->admin_role == "Doctor") {
                        $doctor_info = $this->doctor_model->edit_doctor_details($admin_details->insert_id);

                        if ($doctor_info->doc_status == 2) {
                            $data['error_message'] = 'You are banned or not approved by Authority.';
                            $this->load->view('admin/admin_login', $data);
                            return;
                        }
                    }

                    $session_data['admin_email'] = $admin_details->admin_email;
                    $session_data['admin_id'] = $admin_details->admin_id;
                    $session_data['insert_id'] = $admin_details->insert_id;
                    $session_data['admin_status'] = $admin_details->admin_status;
                    $session_data['admin_role'] = $admin_details->admin_role;
                    $session_data['admin_name'] = $admin_details->admin_name;


                    $this->session->set_userdata($session_data);

//                    print_r($session_data);
//                    exit();

                    $redirect_link = $this->session->userdata('redirect');
                    $this->session->unset_userdata('redirect');


                    if ($this->session->userdata('admin_role') == "User") {
                        if ($redirect_link) {
                            redirect($redirect_link);
                        }
                        redirect('welcome/manage_blog');
                    } elseif ($this->session->userdata('admin_role') == "Patient") {

                        $this->session->set_userdata('message', 'You have Successfully Logged in');
                        if ($redirect_link) {
                            redirect($redirect_link);
                        }
                        redirect('welcome/add_doctor_master');

                    } else {
                        if ($redirect_link) {
                            redirect($redirect_link);
                        }
                        redirect('admin-dashboard');
                    }

                } else {

                    $data['error_message'] = 'Not a Valid User';
                    if ($type == "doctor") {

                        $this->load->view('pages/doc_login_signup', $data);

                    } elseif ($type == "patient") {

                        $this->load->view('pages/patient_login_signup', $data);

                    } else {

                        $this->load->view('admin/admin_login', $data);
                    }

                }
            } else {

                //redirect('admin');
                $data['error_message'] = 'Incorrect Email or Password';
                if ($type == "doctor") {

                    $this->load->view('pages/doc_login_signup', $data);

                } elseif ($type == "patient") {

                    $this->load->view('pages/patient_login_signup', $data);

                } else {

                    $this->load->view('admin/admin_login', $data);
                }

            }
        } else {
            $data['error_message'] = 'Incorrect Email or Password';
            if ($type == "doctor") {

                $this->load->view('pages/doc_login_signup', $data);

            } elseif ($type == "patient") {

                $this->load->view('pages/patient_login_signup', $data);

            } else {

                $this->load->view('admin/admin_login', $data);
            }
        }
    }


    public function check_admin_logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }


//    public function show_dashboard(){
//
//        $data=array();
//        $data['dashboard']=$this->load->view('admin/admin_pages/dashboard','',true);
//        $this->load->view('admin/admin_master',$data);
//    }

    public function doctors()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/form', '', true);
        $this->load->view('admin/admin_master', $data);


    }

    public function manage_doctor()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_doctor', '', true);
        $this->load->view('admin/admin_master', $data);

    }

}
