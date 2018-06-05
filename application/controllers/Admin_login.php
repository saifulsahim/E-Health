<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

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

	    if(isset($this->session->admin_id)){
	        redirect('admin-dashboard');
        }
        else{
            $this->load->view('admin/admin_login');
        }


	}


	public function check_admin_login()
    {
        $admin_email = $this->input->post('adminEmail', true);
        $admin_password = $this->input->post('adminPassword', true);
//        $encrypt_password =password_hash($admin_password, PASSWORD_DEFAULT);
//        echo $encrypt_password;
        //exit();

        $this->load->model('admin_model');

        $admin_details = $this->admin_model->get_admin_details($admin_email);

        if (password_verify($admin_password, $admin_details->admin_password)) {

            if ($admin_details->admin_status == 1) {

                $session_data['admin_email'] = $admin_details->admin_email;
                $session_data['admin_id'] = $admin_details->admin_id;
                $session_data['admin_status'] = $admin_details->admin_status;


                $this->session->set_userdata($session_data);
                redirect('admin-dashboard');

            }
            else{

                $data['error_message']= 'Not a Valid User';
                $this->load->view('admin/admin_login', $data);
            }
        }

    else{

            //redirect('admin');
            $data['error_message'] = 'Incorrect Email or Password';
            $this->load->view('admin/admin_login',$data);

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
        $data['dashboard'] = $this->load->view('admin/admin_pages/form','',true);
        $this->load->view('admin/admin_master',$data);


    }

    public function manage_doctor()
    {
        $data = array();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_doctor','',true);
        $this->load->view('admin/admin_master',$data);

    }

}
