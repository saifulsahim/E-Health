<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model{


        public function save_appointment()
        {
            $data['patient_name'] = $this->input->post('patientName',true);
            $data['phone_number'] = $this->input->post('phoneNo',true);
            $data['gender'] = $this->input->post('appGender',true);
            $data['appointment_date'] = $this->input->post('appDate',true);
            $data['appointment_time'] = $this->input->post('appTime',true);


            $data['appointment_date'] = date('Y-m-d', strtotime($data['appointment_date']));

            $this->db->insert('tbl_appointment',$data);

        }


        public function select_all_appointments()
        {
            $result= $this->db->select('*')
                ->from('tbl_appointment')
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
            $data['patient_name'] = $this->input->post('patientName',true);
            $data['phone_number'] = $this->input->post('phoneNo',true);
            $data['gender'] = $this->input->post('appGender',true);
            $data['appointment_date'] = $this->input->post('appDate',true);
            $data['appointment_time'] = $this->input->post('appTime',true);


            $data['appointment_date'] = date('Y-m-d', strtotime($data['appointment_date']));


            $id = $this->input->post('appId');

            $this->db->where('appointment_id',$id)
                ->update('tbl_appointment',$data);
        }


        public function delete_appointment_by_id($id)
        {
            $this->db->where('appointment_id',$id)
                ->delete('tbl_appointment');
        }
}