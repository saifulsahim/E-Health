<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model
{


    public function save_appointment()
    {
        $patient_id = $this->session->userdata('insert_id');
//        echo $patient_id;
//        exit();
        $patient = $this->patient_model->get_patient_info_by_id($patient_id);


//        echo '<pre>';
//        print_r($patient);
//        exit();

        $data['doc_id'] = $this->input->post('docId', true);

        $data['patient_name'] = $patient->patient_name;
        $data['patient_id'] = $patient->patient_id;

        $data['phone_number'] = $patient->mobile_no;
        $data['doc_fee'] = $this->input->post('docFees', true);

        //$data['gender'] = ;

//        $data['patient_name'] = $this->input->post('patientName', true);
//        $data['doc_id'] = $this->input->post('docId', true);
//        $data['phone_number'] = $this->input->post('phoneNo', true);
//        $data['gender'] = $this->input->post('appGender', true);
        $data['appointment_date'] = $this->input->post('appDate', true);
        $data['payment_type'] = $this->input->post('paymentType', true);
        //$data['payment_status'] = $this->input->post('appDate', true);

        $data['appointment_time'] = $this->input->post('appTime', true);
        $data['appointment_date'] = date('Y-m-d', strtotime($data['appointment_date']));
        $data['appointment_time'] = date('H:i:s', strtotime($data['appointment_time']));
//        echo $data['appointment_time'];
//        exit();
//        $data['appointment_time'] = date('g:h:s', strtotime($data['appointment_time']));

        $query = $this->db->where(array(
            'appointment_date' => $data['appointment_date'],
            'appointment_time' => $data['appointment_time'],
            'doc_id' => $data['doc_id']
        ))->get('tbl_appointment')->row();

        if ($query) {
            return "Appointment has been already taken";
        } else {
            $this->db->insert('tbl_appointment', $data);
            return "Save Appointment Successfully";
        }
    }


    public function select_all_appointments()
    {
        $result = $this->db->select('*')
            ->from('tbl_appointment')

            ->order_by('appointment_date asc', 'appointment_time desc')
            ->get()
            ->result();

        return $result;
    }

    public function select_all_appointments_for_patient($patient_id)
    {
        $result = $this->db->select('*')
            ->from('tbl_appointment')
            ->order_by('appointment_date asc', 'appointment_time desc')
            ->where('patient_id', $patient_id)
            ->get()
            ->result();

//        $result = $this->db->query("SELECT
//    tbl_appointment.*,
//    IFNULL(AVG(tbl_rating.value), 0) AS rating
//FROM
//    tbl_appointment
//LEFT JOIN tbl_rating ON tbl_rating.patient_id = tbl_appointment.patient_id
//WHERE
//    tbl_appointment.patient_id = $patient_id
//GROUP BY
//    tbl_appointment.doc_id")
//        ->result();

        return $result;
    }

    public function get_rating_value($doctor_id)
    {

        $query = $this->db->query("SELECT
    IFNULL(AVG(value), 0) AS rating
FROM
    `tbl_rating`
WHERE
    doc_id = $doctor_id
GROUP BY
    doc_id")->row();

        if ($query)
            return $query->rating;
        else
            return 0;
    }


    public function select_all_appointments_for_doctor($doc_id)
    {
        $result = $this->db->select('*')
            ->from('tbl_appointment')
            ->order_by('appointment_date asc', 'appointment_time desc')
            ->where('appointment_status',1)
            ->where('doc_id', $doc_id)
            ->get()
            ->result();

        return $result;
    }

    public function edit_appointment_details($id)
    {
        $result = $this->db->select('*')
            ->from('tbl_appointment')
            ->where('appointment_id', $id)
            ->get()
            ->row();
        return $result;
    }

    public function update_appointment()
    {
        $data['patient_name'] = $this->input->post('patientName', true);
        $data['doc_id'] = $this->input->post('docId', true);
        $data['phone_number'] = $this->input->post('phoneNo', true);
        $data['gender'] = $this->input->post('appGender', true);
        $data['appointment_date'] = $this->input->post('appDate', true);
        $data['appointment_time'] = $this->input->post('appTime', true);


        $data['appointment_date'] = date('Y-m-d', strtotime($data['appointment_date']));


        $id = $this->input->post('appId');

        $this->db->where('appointment_id', $id)
            ->update('tbl_appointment', $data);
    }


    public function delete_appointment_by_id($id)
    {
        $this->db->where('appointment_id', $id)
            ->delete('tbl_appointment');
    }

    public function done_appointment_by_id($id)
    {
        $data['appointment_status'] = false;

        $this->db->where('appointment_id', $id)
            ->update('tbl_appointment', $data);

    }
}