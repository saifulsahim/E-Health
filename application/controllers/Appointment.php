<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('appointment_model');
    }


    public function save_appointment()
    {
        $payment_type = $this->input->post('paymentType', TRUE);
        $name = $this->session->userdata('admin_name');
        $amount = $this->input->post('docFees', TRUE);

        $message = $this->appointment_model->save_appointment();

        $this->session->set_userdata('message', $message);

        $id = $this->input->post('docId', true);

        if ($payment_type == 'cash_on_delivery') {

            redirect('welcome/add_doc_profile/' . $id);

        } else if ($payment_type == 'ssl_commerz') {

            $this->ssl_coomerz_payment($name, $amount);
        }


        //$this->load->view('pages/doctor_profile');
    }


    public function ssl_coomerz_payment($name, $amount)
    {
        define("STORE_ID", "testbox");

        define("STORE_PASSWORD", "qwerty");

        define("SSLCZ_REDIRECT_URL", "https://sandbox.sslcommerz.com/gwprocess/v3/api.php");

        define("SSLCZ_VALIDATION_API", "https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php");

        # COMMUNICATE NECESSARY INFO

        $post_data = array();

        $post_data['store_id'] = STORE_ID;

        $post_data['store_passwd'] = STORE_PASSWORD;

        $post_data['currency'] = 'BDT';

        $post_data['total_amount'] = str_replace(',', '', $amount);

        $_SESSION['SSLCZ_TRX_ID'] = $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();

        $post_data['success_url'] = "http://localhost/E-health/appointment/success";

        $post_data['fail_url'] = "http://localhost/E-health/appointment/fail";

        $post_data['cancel_url'] = "http://localhost/E-health/appointment/cancel";

        # CUSTOMER INFORMATION

        $_SESSION['CUS_HISTORY']['CUS_NAME'] = $post_data['cus_name'] = $name;
        $_SESSION['CUS_HISTORY']['CUS_NAME2'] = $post_data['cus_name2'] = '';

        $_SESSION['CUS_HISTORY']['CUS_EMAIL'] = $post_data['cus_email'] = 'sahim@yahoo.com';

        $_SESSION['CUS_HISTORY']['CUS_ADD'] = $post_data['cus_add1'] = 'Chittagong';
        //$_SESSION['CUS_HISTORY']['CUS_COUNTRY'] = 'bangladesh' = 'Bangladesh';

        #$post_data['cus_city'] = "Dhaka";
        #$post_data['cus_state'] = "Dhaka";
        #$post_data['cus_postcode'] = "1000";

        #$post_data['cus_fax'] = "01711111111";
        # SHIPMENT INFORMATION
        #$post_data['ship_name'] = "Store Test";
        #$post_data['ship_add1 '] = "Dhaka";
        #$post_data['ship_add2'] = "Dhaka";
        #$post_data['ship_city'] = "Dhaka";
        #$post_data['ship_state'] = "Dhaka";
        #$post_data['ship_postcode'] = "1000";
        #$post_data['ship_country'] = "Bangladesh";
        # OPTIONAL PARAMETERS
        #$post_data['value_a'] = "ref001";
        #$post_data['value_b '] = "ref002";
        #$post_data['value_c'] = "ref003";
        #$post_data['value_d'] = "ref004";
        # REQUEST SEND TO SSLCOMMERZ

        $handle = curl_init();

        curl_setopt($handle, CURLOPT_URL, SSLCZ_REDIRECT_URL);

        curl_setopt($handle, CURLOPT_POST, 1);

        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);

        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

        /* ---------- **Below two lines only for Localhost ----------- */
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, 0);


        $content = curl_exec($handle);

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);


        if ($code == 200 && !(curl_errno($handle))) {

            curl_close($handle);

            $sslcommerzResponse = $content;

            # PARSE THE JSON RESPONSE

            $sslcz = json_decode($sslcommerzResponse, true);

            if (isset($sslcz['status']) && $sslcz['status'] == 'SUCCESS') {

                if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != '') {

                    echo '<meta http-equiv="refresh" content="0; url=' . $sslcz['GatewayPageURL'] . '" />';

                    #header("Location: " . $sslcz['GatewayPageURL']);

                    exit;
                } else {

                    echo "No redirect URL found!";
                }
            } else {

                echo "Invalid Credential!";
            }
        } else {

            curl_close($handle);

            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";

            exit;
        }
    }

    public function success()
    {
        echo "In success";
    }

    public function fail()
    {
        echo "In fail order";
    }

    public function cancel()
    {
        echo "order Cancel";
    }


    public function manage_appointment()
    {
        $data = array();
        $data['app_data'] = $this->appointment_model->select_all_appointments();
//        echo '<pre>';
//        print_r($data);
//        exit();
        $data['dashboard'] = $this->load->view('admin/admin_pages/manage_appointment_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edi_appointment($id)
    {

        $data['app_data'] = $this->appointment_model->edit_appointment_details($id);
        $data['dashboard'] = $this->load->view('admin/admin_pages/edit_appointment_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_appointment()
    {
        $this->appointment_model->update_appointment();

        $sdata = array();
        $sdata['message'] = "Update Appointment Information Successfully !";
        $this->session->set_userdata($sdata);
        $id = $this->input->post('appId', true);
        redirect('appointment/edi_appointment/' . $id);

        //redirect('appointment/manage_appointment');
    }

    public function delete_appointment($id)
    {

        $this->appointment_model->delete_appointment_by_id($id);

        redirect('appointment/manage_appointment');
    }

    public function done_appointment($id)
    {
        $this->appointment_model->done_appointment_by_id($id);

        redirect('patient/manage_patient');
    }


}