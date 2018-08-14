<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model
{


    public function get_patient_details($patient_email)
    {

        $patient_details = $this->db->select('*')
            ->from('tbl_patient')
            ->where('email_address', $patient_email)
            ->get()
            ->row();


        return $patient_details;
    }


    public function save_patient()
    {

        $data['patient_name'] = $this->input->post('patientName', true);
        $data['mobile_no'] = $this->input->post('patientMobileNo', true);
        $data['email_address'] = $this->input->post('patientEmail', true);
        //$data['password'] = $this->input->post('patientPassword',true);

        $patient_password = $this->input->post('patientPassword', true);
        $encrypted_password = password_hash($patient_password, PASSWORD_DEFAULT);
        $data['password'] = $encrypted_password;

        $data['status'] = 1;

        $this->db->insert('tbl_patient', $data);
        return $this->db->insert_id();
    }

    public function save_patient_for_login($insert_id)
    {
        $patient_data['admin_name'] = $this->input->post('patientName', true);
        $patient_data['admin_email'] = $this->input->post('patientEmail', true);
        $patient_password = $this->input->post('patientPassword', true);
        $encrypted_password = password_hash($patient_password, PASSWORD_DEFAULT);
        $patient_data['admin_password'] = $encrypted_password;
        $patient_data['admin_role'] = "Patient";
        $patient_data['admin_status'] = 1;
        $patient_data['insert_id'] = $insert_id;
        $this->db->insert('tbl_admin', $patient_data);
    }

    public function get_patient_info_by_id($id)
    {
        $result = $this->db->select('*')
            ->from('tbl_patient')
            ->where('patient_id', $id)
            ->get()
            ->row();
        return $result;
    }

    public function select_all_patients()
    {
        $result = $this->db->select('*')
            ->from('tbl_patient')
            ->get()
            ->result();

        return $result;
    }

    public function change_patient_status($patient_id, $status)
    {

        $data['status'] = $status;
        $this->db->where('patient_id', $patient_id);
        $this->db->update('tbl_patient', $data);
    }


    public function edit_patient_info($patient_id)
    {

        $result = $this->db->select('*')
            ->from('tbl_patient')
            ->where('patient_id', $patient_id)
            ->get()
            ->row();

        return $result;
    }


    public function update_patient_by_id()
    {
        $data['patient_name'] = $this->input->post('patientName', true);
        $data['mobile_no'] = $this->input->post('patientMobileNo', true);
        $data['email_address'] = $this->input->post('patientEmail', true);

        $patient_id = $this->input->post('patientId', true);

        $this->db->where('patient_id', $patient_id)
            ->update('tbl_patient', $data);
    }

    public function delete_patient_by_id($patient_id)
    {

        $this->db->where('patient_id', $patient_id)
            ->delete('tbl_patient');
        $this->db->where('insert_id', $patient_id)
            ->where('admin_role', 'Patient')
            ->delete('tbl_admin');

    }

}